<?php

namespace App\Repositories;

use JeroenG\Flickr;
use App\Exceptions\GeneralException;
use Illuminate\Pagination\LengthAwarePaginator;

class FlickrRepository implements FlickrRepositoryContract
{
    /**
     * @var Flickr\Flickr flickr API class instance
     */
    protected $flickr;

    public function __construct()
    {
        $this->flickr = new Flickr\Flickr(new Flickr\Api(env('FLICKR_KEY'), env('FLICKR_API_FORMAT')));
    }

    public function testFlickrApi()
    {
        try {
            $test = $this->flickr->echoThis('HelloFlickr');
        } catch (\Exception $e) {
            throw new GeneralException($e->getMessage());
        }

        return $test->stat;
    }

    public function getFlickrApiObj()
    {
        return $this->flickr;
    }

    /**
     * Flickr photo search method.
     *
     * @param \App\Http\Requests\FlickrSearchRequest $input
     * @param int $per_page
     * @return LengthAwarePaginator|null
     * @throws GeneralException
     */
    public function searchPhotos($input, $per_page)
    {
        $paginatedPhotos = null;
        $page = $input->get('page', 1);
        $searchTerm = $input->get('search');
//        $offSet     = ($page * $per_page) - $per_page;

        try {
            $results = $this->flickr->request('flickr.photos.search', [
                'tags' => $searchTerm,
                'per_page' => $per_page,
                'page' => $page
            ]);

            if ($results->stat === 'ok') {
                $paginatedPhotos = new LengthAwarePaginator($this->transformResults($results->photos['photo']), $results->photos['total'], $per_page, $page);
            }
        } catch (\Exception $e) {
            throw new GeneralException($e->getMessage());
        }

        return $paginatedPhotos;
    }

    /**
     * Find Flickr photo.
     *
     * @param int $id
     * @return array
     * @throws GeneralException
     */
    public function findOrThrowException($id)
    {
        $results = $this->flickr->request('flickr.photos.getInfo', [
            'photo_id' => $id,
        ]);

        if ($results->stat === 'ok') {
            return $this->transformResult($results->photo);
        }

        throw new GeneralException('That photo does not exist.');
    }

    /**
     * Transform Flickr search results.
     *
     * @param array $photos list of photos from Flickr
     * @return array
     * @throws GeneralException
     */
    private function transformResults($photos)
    {
        if (count($photos) > 0) {
            $results = [];
            foreach ($photos as $photo) {
                $results[] = [
                    'id' => $photo['id'],
                    'url' => 'https://farm' . $photo['farm'] . '.staticflickr.com/' . $photo['server']
                        . '/' . $photo['id'] . '_' . $photo['secret'] . '_s.jpg'
                ];
            }

            return $results;
        }

        throw new GeneralException('No photos to transform.');
    }

    /**
     * Transform Flickr photo info.
     *
     * @param array $photo
     * @return array
     * @throws GeneralException
     */
    private function transformResult($photo)
    {
        if (is_array($photo)) {
            $result = [];

            $result['id'] = $photo['id'];
            $result['title'] = $photo['title']['_content'];
            $result['description'] = $photo['description']['_content'];
            $result['url'] = 'https://farm' . $photo['farm'] . '.staticflickr.com/'
                . $photo['server'] . '/' . $photo['id'] . '_'
                . $photo['secret'] . '_n.jpg';

            return $result;
        }

        throw new GeneralException('No photo to transform.');
    }
}
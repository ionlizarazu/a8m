<?php

namespace App\Repositories;

use JeroenG\Flickr\Flickr;
use App\Http\Requests\FlickrSearchRequest;

interface FlickrRepositoryContract
{
    /**
     * Get Flickr API class instance
     *
     * @return Flickr
     */
    public function getFlickrApiObj();

    /**
     * Find a photo
     *
     * @param int $id unique photo identifier
     * @return mixed
     */
    public function findOrThrowException($id);

    /**
     * Search Flickr Photos by tags
     *
     * @param FlickrSearchRequest $input
     * @param int $per_page
     * @return mixed
     */
    public function searchPhotos($input, $per_page);
}
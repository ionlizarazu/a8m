<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JeroenG\Flickr;
use Mapper;
use Storage;

class FlickrController extends Controller
{
    /**
     * @var FlickrRepositoryContract
     */
    protected $flickr;

    /**
     * Initialize Flickr API using DI approach.
     *
     * FlickrController constructor.
     * @param FlickrRepositoryContract $flickr
     */
    public function __construct()
    {
       $this->flickr = new Flickr\Flickr(new Flickr\Api(env('FLICKR_KEY'), env('FLICKR_API_FORMAT')));
    }

    /**
     * Display search page.
     *
     * @throws \Exception
     */
    public function route()
    {
        Mapper::map(43.104551, -2.361174, ['marker' => false]);

        $json = Storage::disk('local')->get('coordinates.json');
        $coordinates = json_decode($json, true);

        Mapper::polyline($coordinates['coordinates']);
        return view('route.route');
    }

    /**
     * Search photos
     *
     * @param FlickrSearchRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function search(Request $request)
    {
         $galleryList = $this->flickr->request('flickr.galleries.getList', [
            'api_key' => env('FLICKR_KEY'),
            'user_id' => env('FLICKR_USER_ID')
        ]);
         $galleryImages=array();
         foreach ($galleryList->galleries['gallery'] as $gallery) {
            $imgTitleUrls=array();
            $imgList = $this->flickr->request('flickr.galleries.getPhotos', [
                'api_key' => env('FLICKR_KEY'),
                'gallery_id' => $gallery['gallery_id']
            ]);  
            foreach ($imgList->photos['photo'] as $img) {
                $imgTitleUrls[] = array('title'=>$img['title'],'url'=>"http://farm".$img['farm'].".staticflickr.com/"."/".$img['server']."/".$img['id']."_".$img['secret']."_c".".jpg");  
            }
            $galleryImages[] =array('gallery_id'=>$gallery['gallery_id'],'title'=>$gallery['title']['_content'],'images' => $imgTitleUrls);
         }
         return view('galeria.galeria')->with('galleryImages', $galleryImages);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(FlickrPhotoRequest $request, $id)
    {
        $photo = $this->flickr->findOrThrowException($id);

        return view('flickr.photo', compact('photo'));
    }
}

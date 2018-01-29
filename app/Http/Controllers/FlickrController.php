<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JeroenG\Flickr;
use Mapper;

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
    public function index()
    {
        return view('home.home');
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
         Mapper::map(53.381128999999990000, -1.470085000000040000);
         Mapper::polyline([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['editable' => 'true']);
         $results = $this->flickr->request('flickr.galleries.getList', [
            'api_key' => env('FLICKR_KEY'),
            'user_id' => env('FLICKR_USER_ID')
        ]);
         return view('home.home');



        //return dd($results);
        //$photos = $this->flickr->searchPhotos($request, 20);

        //return view('flickr.search', compact('photos'));
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

<?php
namespace App\Http\Controllers;
use App\Http\Requests\FlickrPhotoRequest;
use App\Http\Requests\FlickrSearchRequest;
use App\Repositories\FlickrRepositoryContract;
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
    public function __construct(FlickrRepositoryContract $flickr)
    {
        $this->flickr = $flickr;
    }
    /**
     * Display search page.
     *
     * @throws \Exception
     */
    public function index()
    {
        return view('flickr.index');
    }
    /**
     * Search photos
     *
     * @param FlickrSearchRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function search(FlickrSearchRequest $request)
    {
        $request='$request';
        //$photos = $this->flickr->searchPhotos($request, 20);
        $photos = $this->flickr->searchPhotos("arbol", 20);
        return view('index', compact('photos'));
        //return $request;
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

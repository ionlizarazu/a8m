<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Storage;

class ClasificationController extends Controller
{
	//
    /**
     * @return mixed
     */
    public function index()
    {
    	 return view('clasification.clasification');
    }
    //
    /**
     * @return mixed
     */
    public function getClasification()
    {
    	//TODO: extract code below from controller :) 
    	$json = Storage::disk('local')->get('public/clasification/2017.json');
        $clasification = json_decode($json, true);
        return Datatables::of($clasification)->make(true);
    }
}

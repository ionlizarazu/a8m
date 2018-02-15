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
    	//TODO: extract code below from controller :) 
    	$json = Storage::disk('local')->get('public/clasification/years.json');
        $years = json_decode($json, true);
        return view('clasification.clasification')->with('years', $years);
    }
    //
    /**
     * @return mixed
     */
    public function getClasification(Request $request)
    {	
        //TODO: extract code below from controller :) 
    	$json = Storage::disk('local')->get('public/clasification/'.$request->year.'.json');
        $clasification = json_decode($json, true);
        return Datatables::of($clasification)->make(true);
        
    }
}

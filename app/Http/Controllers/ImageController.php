<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public function partners()
    {
        //TODO: extract code below from controller :) 
        $files = Storage::Files('/public/partners');
        $partners = [];
        foreach ($files as $file)
        {
            $partners[] = pathinfo($file);
        }        
        return $partners;
    }
}

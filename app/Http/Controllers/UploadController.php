<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $req){
        // echo "Upload function called";
        $path= $req->file('file')->store('public');
        $fileNameArray=explode('/',$path);
        $fileName=$fileNameArray[1];
        return view('display',['path'=>$fileName]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show(){
        // return view('home');
        return to_route('hp');
    }

    function user(){
        return to_route('user',['name'=>"jasvinder"]);
    }


    function showStudent(){
        return 'Show Student list';
    }
    function addStudent(){
        return 'add new Student in list';
    }
    function about($name){
        return $name;
    }
}

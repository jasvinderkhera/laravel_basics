<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Jasvinder Khera";
        return view('user');
    }
    function getNewUser($name){
        // return "Jasvinder Khera";
        return view('getuser',['name'=>$name]);
    }
    function aboutUser($name){
        return "First Project of Laravel from ".$name;
    }
    function adminLogin(){
        if(view::exists('admin.login')){
            $pageName="Admin Login Page";
            $users=["page1","page2","page3"];

            return view('admin.login',["page"=>$pageName,"users"=>$users]);
        }else{
            echo "No View Found";
        }
    }

    function contact(){
        return view("contact");
    }
    function userAbout($name){
        return view('about',['user'=>$name]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    function login(Request $req){
        $req->session()->put('username', $req->input('username'));
        return redirect('profile');
    }

    function logout(){
        session()->pull('username');
        return redirect('login');
    }
}

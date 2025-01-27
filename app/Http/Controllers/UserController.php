<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


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
    function users(){
        $users= DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
    function getUsers(){
        $response= Http::withOptions([
            'verify' => false,
        ])->get('https://jsonplaceholder.typicode.com/users/1');
        $response= $response->body();
        return view('user', ['data'=>json_decode($response)]);
    }

    // queries

    function getQueries(){
        $result =DB::table('users')->get();
        // $result =DB::table('users')->where('phone','7219283746')->get();
        // $result = DB::table('users')->first();
        // $result=[$result];

        //  $result =DB::table('users')->insert(
        //     [
        //         'name'=>'tony',
        //         'email'=>'tony@gmail.com',
        //         'phone'=>'1234',
        //     ]
        //  );
        //  if($result){
        //     return "Data Inserted";
        //  }else{
        //     return 'Data not Inserted';
        //  }


// Update

        //   $result =DB::table('users')->where('name','tony')
        //   ->update(['phone'=>'2222']);
        //  if($result){
        //     return "Data Updated";
        //  }else{
        //     return 'Data not Updated';
        //  }



        // Delete


           $result =DB::table('users')->where('name','tony')
          ->delete();
         if($result){
            return "Data Deleted";
         }else{
            return 'Data not Deleted';
         }


        // return view('queries',['users'=>$result]);
    }


    // Form
    function addUser(Request $req){
        // echo "Add user function called";
        $req ->validate([
            'username'=>'required | uppercase | min:3 | max:25',
            'email'=>'required | email',
            'city'=>'required',
            'skill'=>'required',
            'developer'=>'required',
        ],[
            'username.uppercase'=>"Bade letter mein chahiye"
        ]);
        return $req;   //for all parameters
        // echo "User name is $req->username";
        // echo "<br>";
        // echo "User email is $req->email";
        // echo "<br>";
        // echo "User city is $req->city";

    }
}

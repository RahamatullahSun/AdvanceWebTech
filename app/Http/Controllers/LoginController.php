<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\UserModel;

class LoginController extends Controller
{
    function checkLogin(Request $request){

        $usertable = new UserModel();
        $result=$usertable->where('name',$request->name)->where('email',$request->email)->first();

        if(!empty($result)){
            return view("profile")->with("name",$request->name);
        }else{
            $output="wrong credentials";
            return $output;
        }


    }
}

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
                session()->put("name",$request->name);
                return redirect("profile");
            }else{
                $output="wrong credentials";
                return $output;
            }

    }

    function login(Request $request){
        if(!isset($_SESSION['name'])){
            return view('login');
        }else{
            return redirect("profile");
        }
    }

}

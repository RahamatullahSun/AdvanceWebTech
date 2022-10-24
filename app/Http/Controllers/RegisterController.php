<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class RegisterController extends Controller
{
       function getRegister(Request $request){
        
            $this->validate($request,
            ['name'=>'required'],
            ['requird'=>'your name is required']);

            if(isset($error)){
                $output = $request->name;
                return $output;
            }else{
                $usertable = new UserModel();
                $usertable->name=$request->name;
                $usertable->age=$request->age;
                $usertable->email=$request->email;
                $usertable->save();
                return view('login');
            }

       }
}

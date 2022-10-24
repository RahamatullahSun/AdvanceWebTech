<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    function profile(Request $request){
        return view('profile');

    }

    function logout(Request $request){
       session()->forget('name');
        return redirect('Home');

    }
}

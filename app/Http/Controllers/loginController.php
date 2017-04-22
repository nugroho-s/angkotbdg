<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function dologin(Request $request){
        if ($request->input('username')=='admin'){
            if ($request->input('pwd')=='admin'){
                echo "a";
            }
        }
        echo "b";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userlogin(Request $req){
        //echo "Login controller";
        //return $req->input();
        $data = $req->input();
        $req->session()->put('user',$data['username']);
        //echo session('user');
        return redirect('profile');
    }
}

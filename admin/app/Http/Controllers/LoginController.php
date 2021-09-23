<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class LoginController extends Controller
{
    function LoginIndex(){
        return view('Login');
    }


    function onLogOut(Request $req){
        $req->session()->flush();
        return redirect('/login');
    }


    function onLogin(Request $req){

        $username = $req->input('username');
        $password = $req->input('password');

        $result = AdminModel::where('username','=',$username)->where('password','=',$password)->count();

        if ($result == true) {
            $req->session()->put('username', $username);
            return 1;
        }else{
            return 0;
        }

    }


}

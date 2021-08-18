<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    function settingPage(){
        return view('Pages.SettingPage');
    }
}

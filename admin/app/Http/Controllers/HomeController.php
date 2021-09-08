<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MassageModel;

class HomeController extends Controller
{
    function homeIndex(){
        return view('Home');
    }
}

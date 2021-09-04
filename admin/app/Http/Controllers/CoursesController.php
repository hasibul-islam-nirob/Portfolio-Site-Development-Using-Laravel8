<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursesModel;

class CoursesController extends Controller
{
    
    function CoursesIndex(){
        return view('Pages.CoursesPage');
    }

}

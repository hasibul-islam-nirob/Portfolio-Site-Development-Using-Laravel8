<?php

namespace App\Http\Controllers;

use App\Models\FooterModel;
use Illuminate\Http\Request;
use App\Models\CoursesModel;

class CoursesController extends Controller
{


    function courseIndex(){
        $allCourseData =  json_decode(CoursesModel::get() );
        $footerData = json_decode(FooterModel::where('id','=','1')->get());

        return view('CoursesPage',[
            'allCourseData'=>$allCourseData,
            'footerData'=>$footerData
        ]);
    }


}

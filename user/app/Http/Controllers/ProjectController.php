<?php

namespace App\Http\Controllers;

use App\Models\FooterModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function projectIndex(){

        $footerData = json_decode(FooterModel::where('id','=','1')->get());
        $projectsData = json_decode(ProjectsModel::all());
        return view('ProjectPage',[
            'projectsData'=>$projectsData,
            'footerData'=>$footerData
        ]);
    }
}

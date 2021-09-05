<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsModel;

class ProjectsController extends Controller
{
    function projectsIndex(){
        return view('Pages.ProjectsPage');
    }

    function getAllProjects(){
        return $projectsdata = json_encode(ProjectsModel::all());
    }





}

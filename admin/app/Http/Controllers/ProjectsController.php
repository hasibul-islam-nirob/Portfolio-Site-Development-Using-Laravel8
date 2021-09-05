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


    function projectSelectByID(Request $req){
        
        $id = $req->input('id');
        return $result = json_encode(ProjectsModel::where('id','=',$id)->get());
         
    }

    function projectUpdate(Request $req){
        
        $id = $req->input('id');
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ProjectsModel::where('id','=',$id)->update(['projectName'=>$title, 'projectDes'=>$sortDes, 'projectImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }


    function addNewProject(Request $req){
        
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ProjectsModel::insert(['projectName'=>$title, 'projectDes'=>$sortDes, 'projectImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }


    function projectDelete(Request $req){
        
        $id = $req->input('id');
        $result = ProjectsModel::where('id','=',$id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }




}

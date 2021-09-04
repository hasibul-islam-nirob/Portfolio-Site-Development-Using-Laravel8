<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursesModel;

class CoursesController extends Controller
{
    
    function CoursesIndex(){
        return view('Pages.CoursesPage');
    }


    function getAllCourses(){
        return $result =  json_encode(CoursesModel::all());
    }


    function courseSelectByID(Request $req){
        
        $id = $req->input('id');
        return $result = json_encode(CoursesModel::where('id','=',$id)->get());
         
    }


    function courseDelete(Request $req){
        
        $id = $req->input('id');
        $result = CoursesModel::where('id','=',$id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }



    function addNewCourse(Request $req){
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $longDes = $req->input('longDes');
        $totalClass = $req->input('totalClass');
        $students = $req->input('students');
        $pricrs = $req->input('pricrs');
        $img = $req->input('img');


        $result = CoursesModel::insert([
            'courseName'=>$title, 
            'courseSortDes'=>$sortDes, 
            'courseDes'=>$longDes,
            'totalClass'=>$totalClass,
            'totalStudents'=>$students,
            'price'=>$pricrs,
            'courseImg'=>$img
            ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }

    }



    function courseUpdate(Request $req){
        
        $id = $req->input('id');
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $longDes = $req->input('longDes');
        $totalClass = $req->input('totalClass');
        $students = $req->input('students');
        $pricrs = $req->input('pricrs');
        $img = $req->input('img');


        $result = CoursesModel::where('id','=',$id)->update([
            'courseName'=>$title, 
            'courseSortDes'=>$sortDes, 
            'courseDes'=>$longDes,
            'totalClass'=>$totalClass,
            'totalStudents'=>$students,
            'price'=>$pricrs,
            'courseImg'=>$img
            ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }







}

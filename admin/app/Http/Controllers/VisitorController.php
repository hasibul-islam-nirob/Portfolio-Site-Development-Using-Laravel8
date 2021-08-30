<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    function visitorIndex(){

        $result = VisitorModel::orderBy('id','desc')->take(5)->get();
        $visitorData = json_decode($result);

        return view("Pages.visitorPage",['visitorData'=>$result]);
    }
}

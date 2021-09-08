<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MassageModel;

class MassageController extends Controller
{
    function messageIndex(){
        return view('Pages.Massages');
    }


    function getMessageByID(Request $req){
        $id = $req->input('id');
        return $result = json_encode(MassageModel::where('id','=',$id)->get());
    }



    function getMassageData(){
        return $serviceData = json_encode(MassageModel::where('status','=','0')->get());
    }


    function messageSeened(Request $req){
        
        $id = $req->input('id');
        $result = MassageModel::where('id','=',$id)->update(['status'=>'1']);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }




}

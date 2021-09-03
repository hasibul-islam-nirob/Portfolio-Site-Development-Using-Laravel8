<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    function servicesIndex(){
        return view('Pages.servicePage');
    }


    function getServicesData(){
        
        return $serviceData = json_encode(ServicesModel::all());
    }


    function serviceDelete(Request $req){
        
        $id = $req->input('id');
        $result = ServicesModel::where('id','=',$id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }





}

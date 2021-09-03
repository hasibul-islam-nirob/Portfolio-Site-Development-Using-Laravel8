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


    function serviceSelectByID(Request $req){
        
        $id = $req->input('id');
        return $result = json_encode(ServicesModel::where('id','=',$id)->get());
         
    }


    function addNewService(Request $req){
        
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ServicesModel::insert(['serviceName'=>$title, 'serviceDes'=>$sortDes, 'serviceImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }


    function serviceUpdate(Request $req){
        
        $id = $req->input('id');
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ServicesModel::where('id','=',$id)->update(['serviceName'=>$title, 'serviceDes'=>$sortDes, 'serviceImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
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

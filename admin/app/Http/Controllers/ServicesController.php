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
}

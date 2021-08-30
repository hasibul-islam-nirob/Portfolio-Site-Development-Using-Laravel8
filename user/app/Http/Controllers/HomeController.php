<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class HomeController extends Controller
{
    function homeIndex(){
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $dateTime = date("Y-m-d h:i:sa");
        $mac_address = exec('getmac');

        VisitorModel::insert(['ip_address'=>$ip_address,'mac_address'=>$mac_address, 'visiting_time'=>$dateTime]);
        return view('Home');
    }
}
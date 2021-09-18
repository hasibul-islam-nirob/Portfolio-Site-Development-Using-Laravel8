<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServicesModel;
use App\Models\CoursesModel;
use App\Models\ProjectsModel;
use App\Models\ClientReviewModel;
use App\Models\topBannerModel;
use App\Models\ContactModel;
use App\Models\FooterModel;


class HomeController extends Controller
{

    function homeIndex(){
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $dateTime = date("Y-m-d h:i:sa");
        $mac_address = exec('getmac');

        VisitorModel::insert(['ip_address'=>$ip_address,'mac_address'=>$mac_address, 'visiting_time'=>$dateTime]);
        $serviceData = json_decode(ServicesModel::all());
        $coursesData = json_decode(CoursesModel::orderby('id','desc')->limit(6)->get() );
        $projectsData = json_decode(ProjectsModel::all());
        $reviewData = json_decode(ClientReviewModel::all());
        $topBannerData = json_decode(topBannerModel::where('id','=','1')->get());
        $footerData = json_decode(FooterModel::where('id','=','1')->get());

        return view('Home',[
            'topBannerData'=>$topBannerData,
            'servicesData'=> $serviceData,
            'coursesData'=>$coursesData,
            'projectsData'=>$projectsData,
            'reviewData'=>$reviewData,
            'footerData'=>$footerData
        ]);
    }


    function sendContact(Request $req){
        $name = $req->input('name');
        $mobile = $req->input('mobile');
        $email = $req->input('email');
        $massage = $req->input('massage');

        $result = ContactModel::insert([
            'name'=>$name,
            'mobileNo'=>$mobile,
            'email'=>$email,
            'msg'=>$massage,
            'status'=>'0'
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


}

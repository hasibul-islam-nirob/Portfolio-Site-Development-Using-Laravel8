<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\topBannerModel;
use App\Models\topBannerModel as ModelsTopBannerModel;

class SettingController extends Controller
{
    function settingPage(){
        return view('Pages.SettingPage');
    }


    /*
    function getDataTopBanner(){
        $result = ModelsTopBannerModel::all();
        return view('Pages.SettingPage',['topBannerData'=>$result]);
    }

    */


}

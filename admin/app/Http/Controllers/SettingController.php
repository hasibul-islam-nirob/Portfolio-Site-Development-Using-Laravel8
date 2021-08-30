<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\topBannerModel;

class SettingController extends Controller
{
    function settingIndex(){
        return view('Pages.SettingPage');
    }


    function insertDataTopBanner(Request $req){
        $title    = $req->input("title");
        $subTitle = $req->input("subTitle");
        $sortDesc = $req->input("sortDes");
         	 	 
        $result = topBannerModel::insert(['title'=>$title, 'subTitle'=>$subTitle, 'sortDesc'=>$sortDesc]);

        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }



    


}

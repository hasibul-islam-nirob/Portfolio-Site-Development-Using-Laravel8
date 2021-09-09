<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topBannerModel;

class SettingController extends Controller
{
    function settingIndex(){

        $topBannerData = json_decode(topBannerModel::where('id','=','1')->get());

        return view('Pages.SettingPage',[
            'topBannerData'=>$topBannerData
        ]);
    }



    function toBannerDataInsert(Request $req){
        
        $title = $req->input('title');
        $subTitle = $req->input('subTitle');
        $sortDes = $req->input('sortDes');

            $result = topBannerModel::insert(['id'=>'1','title'=>$title, 'subTitle'=>$subTitle, 'sortDesc'=>$sortDes]);

            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
            
         
    }



    function toBannerDataUpdate(Request $req){
        
        $title = $req->input('title');
        $subTitle = $req->input('subTitle');
        $sortDes = $req->input('sortDes');

            $result = topBannerModel::where('id','=','1')->update(['title'=>$title, 'subTitle'=>$subTitle, 'sortDesc'=>$sortDes]);

            if ($result == true) {
                return 1;
            } else {
                return 0;
            }

         
    }




    


}

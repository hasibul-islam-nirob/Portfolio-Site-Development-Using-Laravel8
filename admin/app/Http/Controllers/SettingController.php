<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topBannerModel;
use App\Models\FooterModel;

class SettingController extends Controller
{
    function settingIndex(){

        $topBannerData = json_decode(topBannerModel::where('id','=','1')->get());
        $footerData = json_decode(FooterModel::where('id','=','1')->get());

        return view('Pages.SettingPage',[
            'topBannerData'=>$topBannerData,
            'footerData'=>$footerData
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


    //*******  Start For Footer    ******* */

    function footerDataInsert(Request $req){
        
        $fbLink = $req->input('fbLink');
        $gitLink = $req->input('gitLink');
        $lnLink = $req->input('lnLink');
        $address = $req->input('address');
        $mobile = $req->input('mobile');
        $fMail = $req->input('fMail');

            $result = FooterModel::insert([
                'id'=>'1',
                'fb_link'=>$fbLink,
                'git_link'=>$gitLink,
                'ln_link'=>$lnLink,
                'address'=>$address,
                'mobileNo'=>$mobile,
                'mailAdd'=>$fMail
                
                ]);

            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
            
         
    }


    function footerDataUpdate(Request $req){
        
        $fbLink = $req->input('fbLink');
        $gitLink = $req->input('gitLink');
        $lnLink = $req->input('lnLink');
        $address = $req->input('address');
        $mobile = $req->input('mobile');
        $fMail = $req->input('fMail');

            $result = FooterModel::where('id','=','1')->update(['fb_link'=>$fbLink, 'git_link'=>$gitLink,  'ln_link'=>$lnLink, 'address'=>$address, 'mobileNo'=>$mobile, 'mailAdd'=>$fMail]);

            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
            
         
    }
    


}

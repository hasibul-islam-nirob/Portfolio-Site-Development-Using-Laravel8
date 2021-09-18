<?php

namespace App\Http\Controllers;

use App\Models\FooterModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactIndex(){

        $footerData = json_decode(FooterModel::where('id','=','1')->get());

        return view('ContactPage',[
            'footerData'=>$footerData
        ]);
    }
}

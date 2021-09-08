<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewsModel;

class ReviewsController extends Controller
{
    function reviewsIndex(){
        return view('Pages.ReviewsPage');
    }


    function getReviewsData(){
        return $reviewData = json_encode(ReviewsModel::all());
    }
    

    function reviewsSelectByID(Request $req){
        
        $id = $req->input('id');
        return $result = json_encode(ReviewsModel::where('id','=',$id)->get());
         
    }


    function addNewReviews(Request $req){
        
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ReviewsModel::insert(['clientName'=>$title, 'clientSay'=>$sortDes, 'clientImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }


    function reviewUpdate(Request $req){
        
        $id = $req->input('id');
        $title = $req->input('title');
        $sortDes = $req->input('sortDes');
        $imgURL = $req->input('imgURL');
        $result = ReviewsModel::where('id','=',$id)->update(['clientName'=>$title, 'clientSay'=>$sortDes, 'clientImg'=>$imgURL]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }


    function reviewDelete(Request $req){
        
        $id = $req->input('id');
        $result = ReviewsModel::where('id','=',$id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
         
    }






}

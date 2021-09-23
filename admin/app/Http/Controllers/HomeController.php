<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MassageModel;
use App\Models\CoursesModel;
use App\Models\ServicesModel;
use App\Models\ReviewsModel;
use App\Models\ProjectsModel;
use App\Models\VisitorModel;


class HomeController extends Controller
{
    function homeIndex(){

        $totalVisitor   = VisitorModel::count();
        $totalMsg       = MassageModel::where('status','=','0')->count();
        $totalCourse    = CoursesModel::count();
        $totalService   = ServicesModel::count();
        $totalReview    = ReviewsModel::count();
        $totalProject   = ProjectsModel::count();

        return view('Home',[
            'totalVisitor'  => $totalVisitor,
            'totalMsg'      => $totalMsg,
            'totalCourse'   => $totalCourse,
            'totalService'  => $totalService,
            'totalProject'  => $totalProject, 
            'totalReview'   => $totalReview,
        ]);
    }
}

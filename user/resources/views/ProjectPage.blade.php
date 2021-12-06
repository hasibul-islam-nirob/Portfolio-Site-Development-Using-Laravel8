@extends('Layout.App')
@section('title','Project')
@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <img class=" page-top-img fadeIn" src="images/knowledge.svg">
                <h1 class="page-top-title mt-3">- My Projects -</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach($projectsData as $projectsData)
            <div class="col-md-3 p-1 text-center">
                <div class=" m-1 card">
                    <div class="text-center">
                        <img class="w-100" src="{{$projectsData->projectImg}}" alt="Card image cap">
                        <h5 class="service-card-title mt-4">{{$projectsData->projectName}} </h5>
                        <h6 class="service-card-subTitle p-0 m-0">{{$projectsData->projectDes}} </h6>
                        <a href="?id={{$projectsData->id}}"  class="normal-btn mt-2 mb-4 btn">Details</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection

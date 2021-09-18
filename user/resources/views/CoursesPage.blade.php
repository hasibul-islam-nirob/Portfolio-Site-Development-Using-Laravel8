@extends('Layout.App')

@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <img class=" page-top-img fadeIn" src="images/knowledge.svg">
                <h1 class="page-top-title mt-3">- Our Courses -</h1>
            </div>
        </div>
    </div>



        <div class="container mt-5">
            <div class="row">
                @foreach($allCourseData as $allCourseData)
                <div class="col-md-4 p-1 text-center">
                    <div class="card">
                        <div class="text-center">
                            <img class="w-100" src="{{$allCourseData->courseImg}}" alt="Card image cap">
                            <h5 class="service-card-title mt-4">{{$allCourseData->courseName}}</h5>
                            <h6 class="service-card-subTitle p-0 ">{{$allCourseData->courseSortDes}} </h6>
                            <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                            <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>



@endsection

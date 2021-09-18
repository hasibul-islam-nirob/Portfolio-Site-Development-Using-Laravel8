<div class="container section-marginTop text-center">
    <h1 class="section-title"> Courses </h1>
    <h1 class="section-subtitle">All the other services we provide, including IT courses, project based source code </h1>
    <div class="row">

        @foreach($coursesData as $coursesData)
        <div class="col-md-4 thumbnail-container">
            <img src="{{$coursesData->courseImg}}" alt="Avatar" class="thumbnail-image ">
            <div class="thumbnail-middle">
                <h1 class="thumbnail-title"> {{$coursesData->courseName}} </h1>
                <h1 class="thumbnail-subtitle"> {{$coursesData->courseSortDes}} </h1>
                <button class="normal-btn btn">Details</button>
            </div>
        </div>
        @endforeach

    </div>
</div>

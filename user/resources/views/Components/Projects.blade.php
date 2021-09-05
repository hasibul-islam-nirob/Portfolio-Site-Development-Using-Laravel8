<div class="container section-marginTop text-center">
    <h1 class="section-title">Projects</h1>
    <h1 class="section-subtitle">All the other services we provide, including IT courses, project based source code </h1>
    <div class="row">

        <div id="one"  class="owl-carousel mb-4 owl-theme">
            @foreach($projectsData as $projectsData)
            <div class="item m-1 card">
                <div class="text-center">
                    <img class="w-100" src="{{$projectsData->projectImg}}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{$projectsData->projectName}}</h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{$projectsData->projectDes}}</h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">Live Preview</button>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="d-inline ml-2">
        <i id="customPrevBtn" class="btn normal-btn"><</i>
        <i id="customNextBtn" class="btn normal-btn">></i>
        <button class="normal-btn  btn">All Projects </button>
    </div>
</div>

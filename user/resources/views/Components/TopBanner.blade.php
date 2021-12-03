
    <div class="container-fluid jumbotron mt-5 ">
        <div class="row">
            <div class="col-md-6 justify-content-center">
                @foreach($topBannerData as $topBannerData)
                <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5">
                    <h1 class="top-banner-subtitle text-justify">{{$topBannerData->title}}</h1>
                    <h1 class="top-banner-title text-justify"> {{$topBannerData->subTitle}} </h1>
                    <h1 class="top-banner-subtitle2 text-justify"> {{$topBannerData->sortDesc}} </h1>
                    <a href="/contact" class="btn btn-primary"  >Contact</a>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <img class="top-banner-img  animated fadeIn" src="images/sdlc2.png">
            </div>
        </div>
    </div>


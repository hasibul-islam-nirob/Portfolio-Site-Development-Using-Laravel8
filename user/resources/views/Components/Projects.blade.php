<div class="container section-marginTop text-center">
    <h1 class="section-title">My Projects</h1>
    <h1 class="section-subtitle">Below are some of my previous work experience and details that I have done before. </h1>
    <div class="row">

        <div id="one"  class="owl-carousel mb-4 owl-theme">
            @foreach($projectsData as $projectsData)
            <div class="item m-1 card">
                <div class="text-center">
                    <img class="w-100" src="{{$projectsData->projectImg}}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{$projectsData->projectName}}</h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{$projectsData->projectDes}}</h6>
                    <button data-toggle="modal" data-target="#basicExampleModal" class="normal-btn-outline mt-2 mb-4 btn">Details</button>
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


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Project Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <img class="w-100" src="{{asset('images/Nirob.jpg')}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="table-responsive-md">
                            <table class="table">
                                <tr>
                                    <th width="10%">Name</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Technology</th>
                                    <td>Technology</td>
                                </tr>
                                <tr>
                                    <th>Database</th>
                                    <td>Technology</td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>
                                        <p disabled >Below are some details of the service that I provide</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                <a href="#" type="button" class="btn btn-primary">Live Preview</a>
            </div>

        </div>
    </div>
</div>

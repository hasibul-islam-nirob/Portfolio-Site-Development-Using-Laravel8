@extends('Layout.App')

@section('content')

<div class="p-3">
    <div class="container">

        <div class="row">
            <div class="col">
                <div>
                    <div class="modal-dialog modal-notify modal-primary" >
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header text-center">
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Top Banner</h4>
                            </div>
                    
                            <!--Body-->
                            <div class="modal-body py-2">
                                <div class="md-form">
                                    <input type="text" id="topBannerTitle" class="form-control validate">
                                    <label data-error="wrong" for="topBannerTitle">Top Banner Title </label>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="topBannerSubTitle" class="form-control validate">
                                    <label data-error="wrong" for="topBannerSubTitle">Top Banner Title </label>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="topBannerSortDesc" class="form-control validate">
                                    <label data-error="wrong"  for="topBannerSortDesc">Top Banner Title </label>
                                </div>

                            </div>
                    
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <button id="submitBtnTopBanner" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
            </div>


            <div class="col">
                <div>
                    <div class="modal-dialog modal-notify modal-success" >
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header text-center">
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Footer</h4>
                            </div>
                    
                            <!--Body-->
                            <div class="modal-body py-2">
                                <div class="md-form">
                                    <input type="text" id="1" class="form-control validate">
                                    <label data-error="wrong" for="1">Top Banner Title </label>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="2" class="form-control validate">
                                    <label data-error="wrong" for="2">Top Banner Title </label>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="3" class="form-control validate">
                                    <label data-error="wrong"  for="3">Top Banner Title </label>
                                </div>

                            </div>
                    
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <a type="button" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


@endsection



@section("jsScript")

<script type="text/javascript">

    $('#submitBtnTopBanner').click(function(){
        var title    = $('#topBannerTitle').val();
        var subtitle = $('#topBannerSubTitle').val();
        var desc     = $('#topBannerSortDesc').val();
      
       alert(title+" "+subtitle+" "+desc);
        DataUploadTop(title, subtitle, desc);
    })

    function DataUploadTop(title, subtitle, desc){
        alert("function call")
        axios.post("/insertDataTopBanner",{ title:title, subTitle:subtitle, sortDes:desc })
        .then(function(response){
            if (response.data == 1) {
                alert("Data Insert Success");
            }else{
                alert("Data Insert Faild");
            }
        }).catch(function(error){
            alert("Somthing Wrong");
        })

    }


</script>

@endsection


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
                            <a onclick="onSave()" type="button" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
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



        <div class="row">

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

            <div class="col">
                <div>
                    <div class="modal-dialog modal-notify modal-primary modal-fluid " >
                        <!--Content-->
                        <div class="modal-content mw-100">
                            <!--Header-->
                            <div class="modal-header text-center">
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Top Banner</h4>
                            </div>
                    
                            <!--Body-->
                            <div class="row">
                                <div class="col ">
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
                                </div>
                                <div class="col">
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
                                </div>
                            </div>
                    
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <a onclick="onSave()" type="button" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
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


<script>

    function onSave(){

        let title = document.getElementById('topBannerTitle').value;
        let subtitle = document.getElementById('topBannerSubTitle').value;
        let desc = document.getElementById('topBannerSortDesc').value;

        alert(title +" "+subtitle+" "+desc);

    }


</script>
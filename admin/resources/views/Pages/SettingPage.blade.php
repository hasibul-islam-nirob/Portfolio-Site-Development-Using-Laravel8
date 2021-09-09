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

                            @empty($topBannerData)
                            <div class="modal-body py-2">
                                <div>
                                    <label data-error="wrong">Top Banner Title </label>
                                    <input value="" type="text" id="topBannerTitleEm" class="form-control validate">
                                </div>

                                <div>
                                    <label data-error="wrong" >Top Banner Sub Title </label>
                                    <input value="" type="text" id="topBannerSubTitleEm" class="form-control validate">
                                </div>

                                <div>
                                    <label data-error="wrong" >Top Banner Description </label>
                                    <input value="" type="text" id="topBannerSortDescEm" class="form-control validate">
                                </div>

                            </div>
                            @endempty

                            @foreach ($topBannerData as $topBannerData)
                            <div class="modal-body py-2">
                                <div>
                                    <label data-error="wrong">Top Banner Title </label>
                                    <input value="{{ $topBannerData->title }}" type="text" id="topBannerTitle" class="form-control validate">
                                </div>

                                <div>
                                    <label data-error="wrong" >Top Banner Sub Title </label>
                                    <input value="{{ $topBannerData->subTitle }}" type="text" id="topBannerSubTitle" class="form-control validate">
                                </div>

                                <div>
                                    <label data-error="wrong" >Top Banner Description </label>
                                    <input value="{{ $topBannerData->sortDesc }}" type="text" id="topBannerSortDesc" class="form-control validate">
                                </div>

                            </div>
                            @endforeach
                            
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">    
                                <button id="InsertBtnTopBanner" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>                          
                                <button id="UpdateBtnTopBanner" class="btn btn-success waves-effect">Update <i class="fas fa-paper-plane-o ml-1"></i></a>
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




/*
    
*/

</script>

@endsection






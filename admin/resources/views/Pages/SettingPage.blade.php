@extends('Layout.App')
@section('title','Setting')
@section('content')

<div class="p-3">
    <div class="container">

        <div class="row">
            <div class="col">
                <div>
                    <div class="modal-dialog modal-notify modal-primary" >

                        <div class="modal-content">

                            <div class="modal-header text-center">
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Top Banner</h4>
                            </div>



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


                            <div class="modal-footer justify-content-center">
                                <button id="InsertBtnTopBanner" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
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



                            <div class="modal-footer justify-content-center">
                                <button id="UpdateBtnTopBanner" class="btn btn-success waves-effect">Update <i class="fas fa-paper-plane-o ml-1"></i></a>
                            </div>
                            @endforeach


                        </div>

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
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Site Title</h4>
                            </div>

                            <!--Body-->
                            <div class="modal-body py-2">
                                <div>
                                    <label >Site Title </label>
                                    <input type="text" id="siteTitle" class="form-control validate">
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
                    <div class="modal-dialog modal-notify modal-primary modal-lg" >

                        <div class="modal-content">

                            <div class="modal-header text-center">
                                <h4 class="modal-title white-text w-100 font-weight-bold py-1">Footer</h4>
                            </div>

                            @empty($footerData)
                            <div class="modal-body py-2">

                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label data-error="wrong">Facebook Link </label>
                                            <input value="" type="text" id="f_fbEm" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >GitHub Link </label>
                                            <input value="" type="text" id="f_gitEm" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >LinkedIn Link </label>
                                            <input value="" type="text" id="f_lnEm" class="form-control validate">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div>
                                            <label>Address</label>
                                            <textarea id="f_addressEm" value="" class="form-control" rows="2" cols="30">
                                            </textarea>
                                        </div>

                                        <div>
                                            <label data-error="wrong" >Mobile No  </label>
                                            <input value="" type="number" id="f_mobileEm" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >Mail Address </label>
                                            <input value="" type="mail" id="f_mailEm" class="form-control validate">
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="modal-footer justify-content-center">
                                <button id="InsertFooterDataBtn" class="btn btn-success waves-effect">Save <i class="fas fa-paper-plane-o ml-1"></i></a>
                            </div>
                            @endempty





                            @foreach ($footerData as $footerData)
                            <div class="modal-body py-2">

                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label data-error="wrong">Facebook Link </label>
                                            <input value="{{ $footerData->fb_link }}" type="text" id="f_fb" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >GitHub Link </label>
                                            <input value="{{ $footerData->git_link }}" type="text" id="f_git" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >LinkedIn Link </label>
                                            <input value="{{ $footerData->ln_link }}" type="text" id="f_ln" class="form-control validate">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div>
                                            <label>Address</label>
                                            <textarea id="f_address" value="" class="form-control" rows="2" cols="30">{{ $footerData->address }}</textarea>
                                        </div>

                                        <div>
                                            <label data-error="wrong" >Mobile No  </label>
                                            <input value="{{ $footerData->mobileNo }}" type="number" id="f_mobile" class="form-control validate">
                                        </div>

                                        <div>
                                            <label data-error="wrong" >Mail Address </label>
                                            <input value="{{ $footerData->mailAdd }}" type="mail" id="f_mail" class="form-control validate">
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="modal-footer justify-content-center">
                                <button id="UpdateFooterDataBtn" class="btn btn-success waves-effect"> Update <i class="fas fa-paper-plane-o ml-1"></i></a>
                            </div>
                            @endforeach


                        </div>

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
======================> Start Top Banner Part  <================================
*/

/// Insert
$('#InsertBtnTopBanner').click(function() {
    var title = $('#topBannerTitleEm').val();
    var subtitle = $('#topBannerSubTitleEm').val();
    var desc = $('#topBannerSortDescEm').val();
    toBannerDataInsert(title, subtitle, desc);
})

function toBannerDataInsert(title, subtitle, desc) {

    $('#InsertBtnTopBanner').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post("/toBannerDataInsert", { title: title, subTitle: subtitle, sortDes: desc })
        .then(function(response) {
            if (response.status == 200 && response.data == 1) {
                $('#InsertBtnTopBanner').html("Insert Success..");
                setTimeout(function() {
                    $('#InsertBtnTopBanner').html("Update");
                }, 2000);
            } else {
                $('#InsertBtnTopBanner').html("Insert Fail..");
                setTimeout(function() {
                    $('#InsertBtnTopBanner').html("Save");
                }, 2000);

            }
        }).catch(function(error) {
            $('#InsertBtnTopBanner').html("Something Went Wrong..");
            setTimeout(function() {
                $('#InsertBtnTopBanner').html("Save");
            }, 2000);
        })

}



/// Update
$('#UpdateBtnTopBanner').click(function() {
    var title = $('#topBannerTitle').val();
    var subtitle = $('#topBannerSubTitle').val();
    var desc = $('#topBannerSortDesc').val();
    toBannerDataUpdate(title, subtitle, desc);

})

function toBannerDataUpdate(title, subtitle, desc) {

    $('#UpdateBtnTopBanner').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post("/toBannerDataUpdate", { title: title, subTitle: subtitle, sortDes: desc })
        .then(function(response) {
            if (response.status == 200 && response.data == 1) {

                $('#UpdateBtnTopBanner').html("Update Success..");
                setTimeout(function() {
                    $('#UpdateBtnTopBanner').html("Update");
                }, 2000);

            } else {


                $('#UpdateBtnTopBanner').html("Update Fail..");
                setTimeout(function() {
                    $('#UpdateBtnTopBanner').html("Update");
                }, 2000);
            }
        }).catch(function(error) {
            $('#UpdateBtnTopBanner').html("Something Went Wrong");
            setTimeout(function() {
                $('#UpdateBtnTopBanner').html("Update");
            }, 2000);
        })

}

/*
======================> End Top Banner Part  <================================
*/

//-------------------------------------------------------------------------------

/*
======================> Start Footer  Part  <================================
*/

$('#InsertFooterDataBtn').click(function() {

let fbLink = $('#f_fbEm').val();
let gitLink = $('#f_gitEm').val();
let lnLink = $('#f_lnEm').val();
let address = $('#f_addressEm').val();
let mobile = $('#f_mobileEm').val();
let fMail = $('#f_mailEm').val();

footerDataInsert(fbLink, gitLink, lnLink, address, mobile, fMail);

})

function footerDataInsert(fbLink, gitLink, lnLink, address, mobile, fMail) {

$('#InsertFooterDataBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

axios.post("/footerDataInsert", {
        fbLink: fbLink,
        gitLink: gitLink,
        lnLink: lnLink,
        address: address,
        mobile: mobile,
        fMail: fMail
    })
    .then(function(response) {
        if (response.status == 200 && response.data == 1) {
            $('#InsertFooterDataBtn').html("Insert Success..");
            setTimeout(function() {
                $('#InsertFooterDataBtn').html("Update");
            }, 2000);
        } else {
            $('#InsertFooterDataBtn').html("Insert Fail..");
            setTimeout(function() {
                $('#InsertFooterDataBtn').html("Save");
            }, 2000);

        }
    }).catch(function(error) {
        $('#InsertFooterDataBtn').html("Something Went Wrong..");
        setTimeout(function() {
            $('#InsertFooterDataBtn').html("Save");
        }, 2000);
    })

}


$('#UpdateFooterDataBtn').click(function() {

let fbLink = $('#f_fb').val();
let gitLink = $('#f_git').val();
let lnLink = $('#f_ln').val();
let address = $('#f_address').val();
let mobile = $('#f_mobile').val();
let fMail = $('#f_mail').val();

footerDataUpdate(fbLink, gitLink, lnLink, address, mobile, fMail);

})

function footerDataUpdate(fbLink, gitLink, lnLink, address, mobile, fMail) {

$('#UpdateFooterDataBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

axios.post("/footerDataUpdate", {
    fbLink: fbLink,
    gitLink: gitLink,
    lnLink: lnLink,
    address: address,
    mobile: mobile,
    fMail: fMail
}).then(function(response) {
    if (response.status == 200 && response.data == 1) {

        $('#UpdateFooterDataBtn').html("Update Success..");
        setTimeout(function() {
            $('#UpdateFooterDataBtn').html("Update");
        }, 2000);

    } else {


        $('#UpdateFooterDataBtn').html("Update Fail..");
        setTimeout(function() {
            $('#UpdateFooterDataBtn').html("Update");
        }, 2000);
    }
}).catch(function(error) {
    $('#UpdateFooterDataBtn').html("Something Went Wrong");
    setTimeout(function() {
        $('#UpdateFooterDataBtn').html("Update");
    }, 2000);
})

}


/*
======================> End Footer Part  <================================
*/

</script>

@endsection

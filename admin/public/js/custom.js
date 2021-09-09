/// Insert
$('#InsertBtnTopBanner').click(function() {
    var title = $('#topBannerTitleEm').val();
    var subtitle = $('#topBannerSubTitleEm').val();
    var desc = $('#topBannerSortDescEm').val();
    toBannerDataInsert(title, subtitle, desc);
})

function toBannerDataInsert(title, subtitle, desc) {
    axios.post("/toBannerDataInsert", { title: title, subTitle: subtitle, sortDes: desc })
        .then(function(response) {
            if (response.status == 200 && response.data == 1) {

                toastr.success('Insert Success..');
            } else {
                toastr.error('Insert Fail');
            }
        }).catch(function(error) {
            toastr.error('Something Went Wrong');
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
    axios.post("/toBannerDataUpdate", { title: title, subTitle: subtitle, sortDes: desc })
        .then(function(response) {
            if (response.status == 200 && response.data == 1) {
                toastr.success('Update Success..');
            } else {
                toastr.error('Update Fail');
            }
        }).catch(function(error) {
            toastr.error('Something Went Wrong');
        })

}
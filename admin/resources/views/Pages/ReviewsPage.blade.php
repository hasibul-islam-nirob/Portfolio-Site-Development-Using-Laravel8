@extends('Layout.App')

@section('content')

<div id="reviewsDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<button id="addNewReviewsBtn" type="button" class="btn btn-danger mb-2">Add New Feedback</button>

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="15%" class="th-sm">Image</th>
						<th width="20%" class="th-sm">Name</th>
						<th width="45%" class="th-sm">Client Says</th>
						<th width="10%" class="th-sm">Edit</th>
						<th width="10%" class="th-sm">Delete</th>
					</tr>
				</thead>

				<tbody id="reviewsTable">
					
				</tbody>

			</table>
		</div>
	</div>
</div>

<!-- Loading Div -->
<div id="loadingDiv" class="container ">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<img src="{{ asset('images/Loading1.svg') }}" alt="ggggg">
		</div>
	</div>
</div>
<!-- Wrong Div -->
<div id="wrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<h1>Somthing went wrong............</h1>
		</div>
	</div>
</div>



<!-- Data Add New Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="AddNewDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-lg" role="document">
		
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100 text-center" id="myModalLabel">Add New Services </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="addNewModalForm" class="modal-body">
					<form action="">
						<div class="">
							<label >Client Title</label>
							<input type="text" id="reviewTitleInput" class="form-control">
						</div>
						<div class="">
							<label >Client Says</label>
							<input type="text" id="reviewSayInput" class="form-control">
							
						</div>
						<div class="">
							<label >Client Img URL</label>
							<input type="Text" id="reviewImgURLInput" class="form-control">
							
						</div>
						
					</form>
				
				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
					<button id="addNewConfirmBtn" type="button" class="btn btn-danger btn-sm">Save</button>
				</div>
			</div>
	</div>
</div>
<!-- Central Add New Modal Small -->


<!-- Data Delete Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="deleteDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="text-center p-3 mt-2" >Do you want to delete  ?</h4>
				<h4 id="modalDeleteDataID" class="text-center d-none" ></h4>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
				<button id="dataDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">Yes</button>
			</div>
		</div>
	</div>
</div>
<!-- Central Delete Modal Small -->



<!-- Data Edit Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-lg" role="document">
		
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Update Reviews </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="updateModalForm" class="modal-body d-none">
					<h4 id="modalEditDataID" class="text-center d-none" ></h4>

					<form action="">
						<div class="">
							<label >Client Name</label>
							<input type="text" id="clientTitle" value="" class="form-control">
						</div>
						<div class="">
							<label >Client Says</label>
							<input type="text" id="clientSortDes" value="" class="form-control">
							
						</div>
						<div class="">
							<label >Client Img URL</label>
							<input type="Text" id="clientImgURL" value="" class="form-control">
							
						</div>
						
					</form>
				
				</div>


				<!-- Loading Div -->
				<div id="editLoadingDiv" class="container">
					<div class="row">
						<div class="col-md-12 text-center p-5">
							<img src="{{ asset('images/Loading1.svg') }}" alt="ggggg">
						</div>
					</div>
				</div>
				<!-- Wrong Div -->
				<div id="editWrongDiv" class="container d-none">
					<div class="row">
						<div class="col-md-12 text-center p-5">
							<h1>Somthing went wrong............</h1>
						</div>
					</div>
				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
					<button id="dataUpdateConfirmBtn" type="button" class="btn btn-danger btn-sm">Update</button>
				</div>
			</div>
	</div>
</div>
<!-- Central Edit Modal Small -->






@endsection




@section('jsScript')

<script type="text/javascript" >

getReviewsData();

function getReviewsData() {

    axios.get('/getReviewsData')
        .then((res) => {

            if (res.status == 200) {
                $('#reviewsDataTable').removeClass('d-none');
                $('#loadingDiv').addClass('d-none');
                $('#reviewsTable').empty();

                var jsonData = res.data;

                $.each(jsonData, function(i) {
                    $('<tr>').html(
                        "<td class='th-sm'><img class='table-img' src=" + jsonData[i].clientImg + "></td>" +
                        "<td class='th-sm'>" + jsonData[i].clientName + "</td>" +
                        "<th class='th-sm'>" + jsonData[i].clientSay + "</th>" +
                        "<td class='th-sm'><a class='clientEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +
                        "<td class='th-sm'><a class='clientDeleteBtn' data-id=" + jsonData[i].id + "><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#reviewsTable');
                });


                // Edit Modal Controls
                $('.clientEditBtn').click(function() {
                    var id = $(this).data('id');
                    getReviewsByID(id);
                    $('#modalEditDataID').html(id);
                    $('#editDataModal').modal('show');
                })


                // Delete Modal Controls
                $('.clientDeleteBtn').click(function() {
                    var id = $(this).data('id');
                    $('#modalDeleteDataID').html(id);
                    $('#deleteDataModal').modal('show');
                })



            } else {
                $('#loadingDiv').addClass('d-none');
                $('#wrongDiv').removeClass('d-none');

            }

        }).catch((err) => {
            $('#loadingDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');

        })

}


// Add New Services
$('#addNewReviewsBtn').click(()=>{
    $('#AddNewDataModal').modal('show');
})

$('#addNewConfirmBtn').click(()=>{
    let title   = $('#reviewTitleInput').val();
    let sortDes = $('#reviewSayInput').val();
    let imgURL  = $('#reviewImgURLInput').val();

    $('#AddNewDataModal').modal('hide');
    addNewReview(title, sortDes, imgURL);
})

function addNewReview(title, sortDes, imgURL) { 

    $('#addNewConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    
    axios.post('/addNewReview', {title:title, sortDes:sortDes, imgURL:imgURL })
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#addNewConfirmBtn').html("Save");
            toastr.success('Data Insert Success..');
            getReviewsData();
        } else {
            $('#addNewConfirmBtn').html("Save");
            toastr.error('Data Insert Fail..');
        }

    }).catch((err) => {
        $('#addNewConfirmBtn').html("Save");
        toastr.error('Somthing went wrong..');
    })

}


// Review Update
$('#dataUpdateConfirmBtn').click(function() {
    let id = $('#modalEditDataID').html();
    let title = $('#clientTitle').val();
    let sortDes = $('#clientSortDes').val();
    let imgURL = $('#clientImgURL').val();

    $('#editDataModal').modal('hide');
    reviewUpdate(id, title, sortDes, imgURL);
})

function reviewUpdate(id, title, sortDes, imgURL) {

    $('#dataUpdateConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/reviewUpdate', { id: id, title: title, sortDes: sortDes, imgURL: imgURL })
        .then((res) => {

            if (res.status == 200 && res.data == 1) {
                $('#dataUpdateConfirmBtn').html("Update");
                toastr.success('Update Success..');
                getReviewsData();
            } else {
                $('#dataUpdateConfirmBtn').html("Update");
                toastr.error('Update Fail..');
            }

        }).catch((err) => {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.error('Somthing went wrong..');
        })

}

// Review Select By ID
function getReviewsByID(servicesID) {

    axios.post('/reviewsSelectByID', { id: servicesID })
        .then((res) => {
            if (res.status == 200) {
                $('#updateModalForm').removeClass('d-none');
                $('#editLoadingDiv').addClass('d-none');

                var jsonData = res.data;
                $('#clientTitle').val(jsonData[0].clientName);
                $('#clientSortDes').val(jsonData[0].clientSay);
                $('#clientImgURL').val(jsonData[0].clientImg);

            } else {
                $('#editLoadingDiv').addClass('d-none');
                $('#editWrongDiv').removeClass('d-none');
            }

        }).catch((err) => {
            $('#editLoadingDiv').addClass('d-none');
            $('#editWrongDiv').removeClass('d-none');
        })

}


// Data Delete
$('#dataDeleteConfirmBtn').click(function() {
    $('#deleteDataModal').modal('hide');
    let id = $('#modalDeleteDataID').html();
    reviewDelete(id);

})

function reviewDelete(deleteID) {

    $('#dataDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/reviewDelete', { id: deleteID })
        .then((res) => {

            if (res.status == 200 && res.data == 1) {
                $('#dataDeleteConfirmBtn').html("Yes");
                toastr.success('Delete Success..');
                getReviewsData();
            } else {
                $('#dataDeleteConfirmBtn').html("Yes");
                toastr.error('Delete Fail..');
            }

        }).catch((err) => {
            $('#dataDeleteConfirmBtn').html("Yes");
            toastr.error('Somthing went wrong..');
        })


}

</script>

@endsection














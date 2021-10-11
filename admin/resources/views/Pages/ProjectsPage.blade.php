@extends('Layout.App')
@section('title','Project')
@section('content')

<div id="projectsDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<button id="addNewProjectsBtn" type="button" class="btn btn-danger mb-2">Add New Project</button>

			<div>
                <table id="projectsDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Image</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Description</th>
						<th class="th-sm">Edit</th>
						<th class="th-sm">Delete</th>
					</tr>
				</thead>

				<tbody id="projectsTable">

				</tbody>

			</table>
            </div>
		</div>
	</div>
</div>

<!-- Loading Div -->
<div id="loadingDiv" class="container">
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
					<h4 class="modal-title w-100" id="myModalLabel">Update Project </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="updateModalForm" class="modal-body d-none">
					<h4 id="modalEditDataID" class="text-center d-none" ></h4>

					<form action="">
						<div class="">
							<label >Projects Title</label>
							<input type="text" id="projectTitle" value="" class="form-control">
						</div>
						<div class="">
							<label for="serviceTitleDes">Projects Sort Description</label>
							<input type="text" id="projectSortDes" value="" class="form-control">

						</div>
						<div class="">
							<label for="serviceTitle">Projects Img URL</label>
							<input type="Text" id="projectImgURL" value="" class="form-control">

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



<!-- Data Edit Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="AddNewDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-lg" role="document">

			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100 text-center" id="myModalLabel">Add New Project </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="addNewModalForm" class="modal-body">
					<form action="">
						<div class="">
							<label >Project Title</label>
							<input type="text" id="projectTitleInput" class="form-control">
						</div>
						<div class="">
							<label >Project Sort Description</label>
							<input type="text" id="projectSortDesInput" class="form-control">

						</div>
						<div class="">
							<label >Project Img URL</label>
							<input type="Text" id="projectImgURLInput" class="form-control">

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



@endsection


@section('jsScript')

<script type="text/javascript" >

getAllProjects()


function getAllProjects() {

    axios.get('/getProjects')
    .then( function(res){

        if (res.status == 200) {

            $('#projectsDataTable').removeClass('d-none');
            $('#loadingDiv').addClass('d-none');
            $('#projectsTable').empty();

            var jsonData = res.data;

            $.each(jsonData, function(i){
                $('<tr>').html(
                "<td class='th-sm'><img class='table-img' src="+jsonData[i].projectImg +"></td>"+
                "<td class='th-sm'>"+ jsonData[i].projectName +"</td>"+
                "<th class='th-sm'>"+ jsonData[i].projectDes +"</th>"+
                "<td class='th-sm'><a class='projectEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit'></i></a></td>"+
                "<td class='th-sm'><a class='projectDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#projectsTable');
            });

            // Project Edit
            $('.projectEditBtn').click(function(){
                let id = $(this).data('id');
                getProjectByID(id);
                $('#modalEditDataID').html(id);
                $('#editDataModal').modal('show');
            })


            // Project Delete
            $('.projectDeleteBtn').click(function(){
                let id = $(this).data('id');
                $('#modalDeleteDataID').html(id);
                $('#deleteDataModal').modal('show');
            })



        } else {
            $('#loadingDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
        }

    }).catch(function (error){
        $('#loadingDiv').addClass('d-none');
        $('#wrongDiv').removeClass('d-none');
    })

}


// Add New Project
$('#addNewProjectsBtn').click(()=>{
    $('#AddNewDataModal').modal('show');
})

$('#addNewConfirmBtn').click(()=>{
    let title   = $('#projectTitleInput').val();
    let sortDes = $('#projectSortDesInput').val();
    let imgURL  = $('#projectImgURLInput').val();
    addNewProject(title, sortDes, imgURL);
    $('#AddNewDataModal').modal('hide');

})

function addNewProject(title, sortDes, imgURL) {

    $('#addNewConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/addProject', {title:title, sortDes:sortDes, imgURL:imgURL })
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#addNewConfirmBtn').html("Save");
            toastr.success('Data Insert Success..');
            getAllProjects();
        } else {
            $('#addNewConfirmBtn').html("Save");
            toastr.error('Data Insert Fail..');
        }

    }).catch((err) => {
        $('#addNewConfirmBtn').html("Save");
        toastr.error('Somthing went wrong..');
    })

}




// Project Update
$('#dataUpdateConfirmBtn').click(function(){
    let id      = $('#modalEditDataID').html();
    let title   = $('#projectTitle').val();
    let sortDes = $('#projectSortDes').val();
    let imgURL  = $('#projectImgURL').val();

    $('#editDataModal').modal('hide');
    projectUpdate(id, title, sortDes, imgURL);
})

function projectUpdate(id, title, sortDes, imgURL) {

    $('#dataUpdateConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/projectUpdate', { id:id, title:title, sortDes:sortDes, imgURL:imgURL })
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.success('Update Success..');
            getAllProjects();
        } else {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.error('Update Fail..');
        }

    }).catch((err) => {
        $('#dataUpdateConfirmBtn').html("Update");
        toastr.error('Somthing went wrong..');
    })

}

// Project Select By ID
function getProjectByID(servicesID){

    axios.post('/projectSelectByID',{id:servicesID})
    .then((res)=>{
        if (res.status == 200) {
            $('#updateModalForm').removeClass('d-none');
            $('#editLoadingDiv').addClass('d-none');

            var jsonData = res.data;
            $('#projectTitle').val(jsonData[0].projectName);
            $('#projectSortDes').val(jsonData[0].projectDes);
            $('#projectImgURL').val(jsonData[0].projectImg);

        } else {
            $('#editLoadingDiv').addClass('d-none');
            $('#editWrongDiv').removeClass('d-none');
        }

    }).catch((err) => {
        $('#editLoadingDiv').addClass('d-none');
        $('#editWrongDiv').removeClass('d-none');
    })

}




// Data Delete Function
$('#dataDeleteConfirmBtn').click(function(){
    $('#deleteDataModal').modal('hide');
    let id = $('#modalDeleteDataID').html();
    projectDelete(id);
})

function projectDelete(deleteID) {

    $('#dataDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/projectDelete', {id:deleteID})
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#dataDeleteConfirmBtn').html("Yes");
            toastr.success('Delete Success..');
            getAllProjects();
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

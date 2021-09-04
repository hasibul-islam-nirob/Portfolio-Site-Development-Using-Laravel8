@extends('Layout.App')

@section('content')

<div id="servicesDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<button id="addNewServicesBtn" type="button" class="btn btn-danger mb-2">Add New Service</button>

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Image</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Description</th>
						<th class="th-sm">Edit</th>
						<th class="th-sm">Delete</th>
					</tr>
				</thead>

				<tbody id="servicesTable">
					
				</tbody>

			</table>
		</div>
	</div>
</div>




<!-- Data Edit Modal Div -->
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
							<label for="serviceTitleInput">Services Title</label>
							<input type="text" id="serviceTitleInput" class="form-control">
						</div>
						<div class="">
							<label for="serviceSortDesInput">Services Sort Description</label>
							<input type="text" id="serviceSortDesInput" class="form-control">
							
						</div>
						<div class="">
							<label for="serviceImgURLInput">Services Img URL</label>
							<input type="Text" id="serviceImgURLInput" class="form-control">
							
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
					<h4 class="modal-title w-100" id="myModalLabel">Update Services </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="updateModalForm" class="modal-body d-none">
					<h4 id="modalEditDataID" class="text-center d-none" ></h4>

					<form action="">
						<div class="">
							<label >Services Title</label>
							<input type="text" id="serviceTitle" value="" class="form-control">
						</div>
						<div class="">
							<label for="serviceTitleDes">Services Sort Description</label>
							<input type="text" id="serviceSortDes" value="" class="form-control">
							
						</div>
						<div class="">
							<label for="serviceTitle">Services Img URL</label>
							<input type="Text" id="serviceImgURL" value="" class="form-control">
							
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

	getServicesData();


	
function getServicesData(){
    
    axios.get('/getServicesData')
    .then((res) => {

        if (res.status==200) {
            $('#servicesDataTable').removeClass('d-none');
            $('#loadingDiv').addClass('d-none');

            $('#servicesTable').empty();

            var jsonData = res.data;

            $.each(jsonData, function(i){
                $('<tr>').html(
                "<td class='th-sm'><img class='table-img' src="+jsonData[i].serviceImg +"></td>"+
                "<td class='th-sm'>"+ jsonData[i].serviceName +"</td>"+
                "<th class='th-sm'>"+ jsonData[i].serviceDes +"</th>"+
                "<td class='th-sm'><a class='servicesEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit'></i></a></td>"+
                "<td class='th-sm'><a class='servicesDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#servicesTable');
            });

            // Edit Modal Controls
            $('.servicesEditBtn').click(function(){
                var id = $(this).data('id');
                getServicesByID(id);
                $('#modalEditDataID').html(id);
                $('#editDataModal').modal('show');
            })


            // Delete Modal Controls
            $('.servicesDeleteBtn').click(function(){
                var id = $(this).data('id');
                $('#modalDeleteDataID').html(id);
                $('#deleteDataModal').modal('show');
            })


        }else{
            $('#loadingDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
            
        }
        
    }).catch((err) => {
        $('#loadingDiv').addClass('d-none');
        $('#wrongDiv').removeClass('d-none');
        
    })
    
}


// Add New Services
$('#addNewServicesBtn').click(()=>{
    $('#AddNewDataModal').modal('show');
})

$('#addNewConfirmBtn').click(()=>{
    let title   = $('#serviceTitleInput').val();
    let sortDes = $('#serviceSortDesInput').val();
    let imgURL  = $('#serviceImgURLInput').val();

    $('#AddNewDataModal').modal('hide');
    addNewService(title, sortDes, imgURL);
})

function addNewService(title, sortDes, imgURL) { 

    $('#addNewConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    
    axios.post('/addNewServices', {title:title, sortDes:sortDes, imgURL:imgURL })
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#addNewConfirmBtn').html("Save");
            toastr.success('Data Insert Success..');
            getServicesData();
        } else {
            $('#addNewConfirmBtn').html("Save");
            toastr.error('Data Insert Fail..');
        }

    }).catch((err) => {
        $('#addNewConfirmBtn').html("Save");
        toastr.error('Somthing went wrong..');
    })

}



// Services Update
$('#dataUpdateConfirmBtn').click(function(){
    let id      = $('#modalEditDataID').html();
    let title   = $('#serviceTitle').val();
    let sortDes = $('#serviceSortDes').val();
    let imgURL  = $('#serviceImgURL').val();
    
    $('#editDataModal').modal('hide');
    servicesUpdate(id, title, sortDes, imgURL);
})

function servicesUpdate(id, title, sortDes, imgURL) { 

    $('#dataUpdateConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    
    axios.post('/serviceUpdate', { id:id, title:title, sortDes:sortDes, imgURL:imgURL })
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.success('Update Success..');
            getServicesData();
        } else {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.error('Update Fail..');
        }

    }).catch((err) => {
        $('#dataUpdateConfirmBtn').html("Update");
        toastr.error('Somthing went wrong..');
    })

}



// Services Select By ID
function getServicesByID(servicesID){

    axios.post('/serviceSelectByID',{id:servicesID})
    .then((res)=>{
        if (res.status == 200) {
            $('#updateModalForm').removeClass('d-none');
            $('#editLoadingDiv').addClass('d-none');

            var jsonData = res.data;
            $('#serviceTitle').val(jsonData[0].serviceName);
            $('#serviceSortDes').val(jsonData[0].serviceDes);
            $('#serviceImgURL').val(jsonData[0].serviceImg);

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
$('#dataDeleteConfirmBtn').click(function(){ 
    $('#deleteDataModal').modal('hide');
    let id = $('#modalDeleteDataID').html();
    servicesDelete(id);

 })

function servicesDelete(deleteID) { 

    $('#dataDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    
    axios.post('/serviceDelete', {id:deleteID})
    .then((res)=>{

        if (res.status==200 && res.data == 1) {
            $('#dataDeleteConfirmBtn').html("Yes");
            toastr.success('Delete Success..');
            getServicesData();
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
@extends('Layout.App')

@section('content')

<div id="servicesDataTable" class="container d-none">
	<div class="row">
		<div class="col-md-12 p-5">
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
					<h4 id="modalEditDataID" class="text-center " ></h4>

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

</script>

@endsection
@extends('Layout.App')

@section('content')

<div id="massageDataTable" class="container ">

	<div class="row">
		<div class="col-md-12 p-5">

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Name</th>
                        <th class="th-sm">Mail Address</th>
                        <th class="th-sm">Number</th>
						<th class="th-sm">Message</th>
						<th class="th-sm">Seen</th>
					</tr>
				</thead>

				<tbody id="massageTable">
					
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




<!-- Message Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="msgShowDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-lg" role="document">
		
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Your Massage </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="massageModalForm" class="modal-body d-none">
					<h4 id="modalEditDataID" class="text-center d-none" ></h4>

					<form action="">

						
						<div>
							<label >Name</label>
							<input type="text" id="msgName" value="" disabled class="form-control">
						</div>
						<div class="">
							<label>Phone Number</label>
							<input type="Text" id="msgNumber" value="" disabled class="form-control">
	
						</div>

						<div >
							<label>E-Mail Adddress</label>
							<input type="Text" id="msgMail" value="" disabled class="form-control">
							
						</div>

						<div >
							<label>Massage</label>
							<textarea id="msgText" value=""disabled class="form-control" rows="5" cols="50"></textarea>
							
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
					<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Ok</button>
					<button id="msgSeenConfirmBtn" type="button" class="btn btn-danger btn-sm">Seen</button>
				</div>
			</div>
	</div>
</div>
<!-- Central Edit Modal Small -->

@endsection




@section('jsScript')

<script type="text/javascript" >

getMassageData()

</script>

@endsection
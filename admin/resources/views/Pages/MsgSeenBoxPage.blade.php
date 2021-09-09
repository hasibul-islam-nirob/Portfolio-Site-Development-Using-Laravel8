@extends('Layout.App')

@section('content')

<div id="massageSeenDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Name</th>
                        <th class="th-sm">Mail Address</th>
                        <th class="th-sm">Message</th>
						<th class="th-sm">Unseen</th>
						<th class="th-sm">Delete</th>
					</tr>
				</thead>

				<tbody id="massageSeenTable">
					
					
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


<!-- Data Unseel Alrt Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="msgUnSeenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="text-center p-3 mt-2" >Do you want to unseen this message  ?</h4>
				<h4 id="msgUnSeenModalID" class="text-center d-none" ></h4>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
				<button id="unSeenConfirmBtn" type="button" class="btn btn-danger btn-sm">Unseen</button>
			</div>
		</div>
	</div>
</div>
<!-- Central Unseel Alrt Modal Small -->


<!-- Data Delete Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="msgDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="text-center p-3 mt-2" >Do you want to delete this message  ?</h4>
				<h4 id="msgDeleteModalID" class="text-center " ></h4>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
				<button id="msgDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">Delete</button>
			</div>
		</div>
	</div>
</div>
<!-- Central Delete Modal Small -->


@endsection




@section('jsScript')

<script type="text/javascript" >

getSeenedMassageData();

</script>

@endsection
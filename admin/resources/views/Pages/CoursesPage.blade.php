@extends('Layout.App')


@section('content')

<div id="servicesDataTable" class="container ">

	<div class="row">
		<div class="col-md-12 p-5">

			<button id="addNewServicesBtn" type="button" class="btn btn-danger mb-2">Add New Course</button>

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Image</th>
						<th class="th-sm">Service Name</th>
						<th class="th-sm">Sort Description</th>
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

@endsection


@section('jsScript')

<script type="text/javascript" >










</script>

@endsection
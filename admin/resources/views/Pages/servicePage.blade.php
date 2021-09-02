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



<div id="loadingDiv" class="container">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<img src="{{ asset('images/Loading1.svg') }}" alt="ggggg">
		</div>
	</div>
</div>

<div id="wrongDiv" class="container d-none">
	<div class="row">
		<div class="col-md-12 text-center p-5">
			<h1>Somthing went wrong............</h1>
		</div>
	</div>
</div>


@endsection



@section('jsScript')

<script type="text/javascript" >

	getServicesData();

</script>

@endsection
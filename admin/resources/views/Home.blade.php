@extends('Layout.App')

@section('content')


<div class="content p-5">
	<div class="row">

		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Visitors
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalVisitor }}</h2>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Services
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalService }}</h2>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Courses
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalCourse }}</h2>
				</div>
			</div>
		</div>


		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Massages
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalMsg }}</h2>
				</div>
			</div>
		</div>



		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Reviews
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalReview }}</h2>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-12 col-lg-4">
			<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				<div class="card-header">
					Total Projects
				</div>
				<div class="card-body">
					<h2 class="card-title text-center">{{ $totalProject }}</h2>
				</div>
			</div>
		</div>
		
	</div>
</div>



@endsection


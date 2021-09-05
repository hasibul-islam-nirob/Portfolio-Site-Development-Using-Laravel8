@extends('Layout.App')


@section('content')

<div id="coursesDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<button id="addNewCoursesBtn" type="button" class="btn btn-danger mb-2">Add New Course</button>

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

				<tbody id="coursesTable">
					
				</tbody>

			</table>
		</div>
	</div>
</div>



<!-- Data Add New Course Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="addNewDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-lg" role="document">
		
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Add New Course </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="addNewModalForm" class="modal-body">

					<form action="">

						<div class="row">
							<div class="col-6">
								<div>
									<label >Course Title</label>
									<input type="text" id="courseTitleInput" value="" class="form-control">
								</div>
								<div class="">
									<label>Course Sort Description</label>
									<input type="Text" id="courseSortDesInput" value="" class="form-control">
			
								</div>
								<div >
									<label>Course Description</label>
									<textarea id="courseDesInput" value="" class="form-control" rows="3" cols="50">
									</textarea>
									
								</div>
								<div >
									<label>Course Total Class</label>
									<input type="Text" id="totalClassInput" value="" class="form-control">
									
								</div>
							</div>
							<div class="col-6">
								<div >
									<label>Course Total Student</label>
									<input type="Text" id="totalStudentInput" value="" class="form-control">
									
								</div>
								<div >
									<label>Course Price</label>
									<input type="Text" id="coursePriceInput" value="" class="form-control">
									
								</div>
								<div>
									<label>Course Img URL</label>
									<input type="Text" id="courseImgURLInput" value="" class="form-control">
									
								</div>
							</div>
						
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
<!-- Central Add New Course Modal Small -->


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
					<h4 class="modal-title w-100" id="myModalLabel">Update Course </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<div id="updateModalForm" class="modal-body d-none">
					<h4 id="modalEditDataID" class="text-center d-none" ></h4>

					<form action="">

						<div class="row">
							<div class="col-6">
								<div>
									<label >Course Title</label>
									<input type="text" id="courseTitle" value="" class="form-control">
								</div>
								<div class="">
									<label>Course Sort Description</label>
									<input type="Text" id="courseSortDes" value="" class="form-control">
			
								</div>
								<div >
									<label>Course Description</label>
									<textarea id="courseDes" value="" class="form-control" rows="3" cols="50">
									</textarea>
									
								</div>
								<div >
									<label>Course Total Class</label>
									<input type="Text" id="totalClass" value="" class="form-control">
									
								</div>
							</div>
							<div class="col-6">
								<div >
									<label>Course Total Student</label>
									<input type="Text" id="totalStudent" value="" class="form-control">
									
								</div>
								<div >
									<label>Course Price</label>
									<input type="Text" id="coursePrice" value="" class="form-control">
									
								</div>
								<div>
									<label>Course Img URL</label>
									<input type="Text" id="courseImgURL" value="" class="form-control">
									
								</div>
							</div>
						
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

getCoursesData ()


function getCoursesData () {
    axios.get('/getCoursesData')
    .then((res) => {

        if (res.status == 200) {

            $('#coursesDataTable').removeClass('d-none');
            $('#loadingDiv').addClass('d-none');
            $('#coursesTable').empty();

            var jsonData = res.data;
            $.each(jsonData, function (i) { 
                $('<tr>').html(
                    "<td class='th-sm'><img class='table-img' src="+jsonData[i].courseImg +"></td>"+
                    "<td class='th-sm'>"+ jsonData[i].courseName +"</td>"+
                    "<th class='th-sm'>"+ jsonData[i].courseSortDes +"</th>"+
                    "<td class='th-sm'><a class='coursesEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit'></i></a></td>"+
                    "<td class='th-sm'><a class='coursesDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt'></i></a></td>" 
                ).appendTo('#coursesTable');

             });

             // For Edit Data
             $('.coursesEditBtn').click(function(){
                let id = $(this).data('id');
                getCoursesByID(id);
                $('#modalEditDataID').html(id);
                $('#editDataModal').modal('show');
             })

             // For Delete Data
             $('.coursesDeleteBtn').click(function(){
                let id = $(this).data('id');
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
    
};



// Add New Course
$('#addNewCoursesBtn').click(function () {  
    $('#addNewDataModal').modal('show');
})

$('#addNewConfirmBtn').click(function(){
    let title    = $('#courseTitleInput').val();
    let sortDes  = $('#courseSortDesInput').val();
    let longDes  = $('#courseDesInput').val();
    let totalClass= $('#totalClassInput').val();
    let students = $('#totalStudentInput').val();
    let pricrs   = $('#coursePriceInput').val();
    let img      = $('#courseImgURLInput').val();
    addNewCourse(title, sortDes, longDes, totalClass, students, pricrs, img);
    $('#addNewDataModal').modal('hide');
})
function addNewCourse(title, sortDes, longDes, totalClass, students, pricrs, img) {  
    $('#addNewConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/addNewCourse',{title:title, sortDes:sortDes, longDes:longDes, totalClass:totalClass, students:students, pricrs:pricrs, img:img})
    .then(function(res){
        if (res.status == 200 && res.data==1) {
            $('#addNewConfirmBtn').html("Save");
            toastr.success('New Course Add Success..');
            getCoursesData();
        } else {
            $('#addNewConfirmBtn').html("Save");
            toastr.error('New Course Add Fail..');
        }

    }).catch(function (error) {  
        $('#addNewConfirmBtn').html("Save");
        toastr.error('Somthing went wrong..');
    })
  
}






// Course Update
$('#dataUpdateConfirmBtn').click(function () {
    $('#editDataModal').modal('hide');

    let id = $('#modalEditDataID').html();
    let title    = $('#courseTitle').val();
    let sortDes  = $('#courseSortDes').val();
    let longDes  = $('#courseDes').val();
    let totalClass= $('#totalClass').val();
    let students = $('#totalStudent').val();
    let pricrs   = $('#coursePrice').val();
    let img      = $('#courseImgURL').val();

    courseUpdate(id, title, sortDes, longDes, totalClass, students, pricrs, img);
})

function courseUpdate(id, title, sortDes, longDes, totalClass, students, pricrs, img) {  
    $('#dataUpdateConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/courseUpdate',{id:id, title:title, sortDes:sortDes, longDes:longDes, totalClass:totalClass, students:students, pricrs:pricrs, img:img})
    .then(function(res){
        if (res.status == 200 && res.data==1) {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.success('Update Success..');
            getCoursesData();
        } else {
            $('#dataUpdateConfirmBtn').html("Update");
            toastr.error('Update Fail..');
        }

    }).catch(function (error) {  
        $('#dataUpdateConfirmBtn').html("Update");
        toastr.error('Somthing went wrong..');
    })
  
}




// Course Select By ID
function getCoursesByID(courseID){

    axios.post('/courseSelectByID',{id:courseID})
    .then((res)=>{
        if (res.status == 200) {
            $('#updateModalForm').removeClass('d-none');
            $('#editLoadingDiv').addClass('d-none');

            var jsonData = res.data;
            $('#courseTitle').val(jsonData[0].courseName);
            $('#courseSortDes').val(jsonData[0].courseSortDes);
            $('#courseDes').val(jsonData[0].courseDes);
            $('#totalClass').val(jsonData[0].totalClass);
            $('#totalStudent').val(jsonData[0].totalStudents);
            $('#coursePrice').val(jsonData[0].price);
            $('#courseImgURL').val(jsonData[0].courseImg);

        } else {
            $('#editLoadingDiv').addClass('d-none');
            $('#editWrongDiv').removeClass('d-none');
        }

    }).catch((err) => {
        $('#editLoadingDiv').addClass('d-none');
        $('#editWrongDiv').removeClass('d-none');
    })
    
}





// Course Delete
$('#dataDeleteConfirmBtn').click(function () {
    $('#deleteDataModal').modal('hide');
    let id =  $('#modalDeleteDataID').html();
    coursesDelete(id);
})

function coursesDelete(deleteID) { 
    $('#dataDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    
    axios.post('/courseDelete', {id:deleteID})
    .then((res)=>{
        if (res.status==200 && res.data == 1) {
            $('#dataDeleteConfirmBtn').html("Yes");
            toastr.success('Delete Success..');
            getCoursesData ();
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
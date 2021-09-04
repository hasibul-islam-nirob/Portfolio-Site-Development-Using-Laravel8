
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




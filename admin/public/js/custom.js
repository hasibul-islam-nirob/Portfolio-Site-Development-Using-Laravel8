
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








// Services Update
$('#dataUpdateConfirmBtn').click(function(){
    let id      =  $('#modalEditDataID').html();
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
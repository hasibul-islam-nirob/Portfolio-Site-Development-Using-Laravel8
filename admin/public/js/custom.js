
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
                "<td class='th-sm'><a ><i class='fas fa-edit'></i></a></td>"+
                "<td class='th-sm'><a class='servicesDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#servicesTable');
            });


            $('.servicesDeleteBtn').click(function(){
                var id = $(this).data('id');
                $('#modalDataID').html(id);
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

// Data Delete
$('#dataDeleteConfirmBtn').click(function(){ 
    $('#deleteDataModal').modal('hide');
    let id = $('#modalDataID').html();
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
            toastr.error('Delete Fail..');
        }

    }).catch((err) => {
        toastr.error('Somthing went wrong..');
    })
    
    


}
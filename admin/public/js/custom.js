
function getServicesData(){
    
    axios.get('/getServicesData')
    .then((res) => {

        if (res.status==200) {
            $('#servicesDataTable').removeClass('d-none');
            $('#loadingDiv').addClass('d-none');
            var jsonData = res.data;

            $.each(jsonData, function(i){
                $('<tr>').html(
                "<td class='th-sm'><img class='table-img' src="+jsonData[i].serviceImg +"></td>"+
                "<td class='th-sm'>"+ jsonData[i].serviceName +"</td>"+
                "<th class='th-sm'>"+ jsonData[i].serviceDes +"</th>"+
                "<td class='th-sm'><a ><i class='fas fa-edit'></i></a></td>"+
                "<td class='th-sm'><a ><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#servicesTable');
            });


        }else{
            $('#loadingDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
            
        }
        
    }).catch((err) => {
        $('#loadingDiv').addClass('d-none');
        $('#wrongDiv').removeClass('d-none');
        
    })
    
    
}
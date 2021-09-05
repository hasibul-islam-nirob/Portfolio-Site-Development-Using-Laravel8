
function getAllProjects() {  

    axios.get('/getProjects')
    .then( function(res){

        if (res.status == 200) {
            
            $('#projectsDataTable').removeClass('d-none');

            $('#loadingDiv').addClass('d-none');

            $('#projectsTable').empty();

            var jsonData = res.data;

            $.each(jsonData, function(i){
                $('<tr>').html(
                "<td class='th-sm'><img class='table-img' src="+jsonData[i].projectImg +"></td>"+
                "<td class='th-sm'>"+ jsonData[i].projectName +"</td>"+
                "<th class='th-sm'>"+ jsonData[i].projectDes +"</th>"+
                "<td class='th-sm'><a class='projectEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit'></i></a></td>"+
                "<td class='th-sm'><a class='projectDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#projectsTable');
            });

        } else {
            
        }


        
    }).catch(function (error){
        
    })
    




}
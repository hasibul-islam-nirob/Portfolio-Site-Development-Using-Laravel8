function getMassageData() {

    axios.get('/getMassage')
        .then((res) => {

            if (res.status == 200) {
                $('#massageDataTable').removeClass('d-none');
                $('#loadingDiv').addClass('d-none');

                $('#massageTable').empty();

                var jsonData = res.data;

                $.each(jsonData, function(i) {
                    $('<tr>').html(
                        "<td class='th-sm'>" + jsonData[i].name + "</td>" +
                        "<th class='th-sm'>" + jsonData[i].email + "</th>" +
                        "<td class='th-sm'>" + jsonData[i].mobileNo + "</td>" +
                        "<th class='th-sm'>" + jsonData[i].msg.substr(0, 30) + "...." + "</th>" +
                        "<td class='th-sm'><a class='massageSeenBtn' data-id=" + jsonData[i].id + "><i class='fas fa-eye'></i></a></td>"
                    ).appendTo('#massageTable');
                });


                $('.massageSeenBtn').click(function() {
                    let id = $(this).data('id');
                    $('#modalEditDataID').html(id);
                    getMessageByID(id);
                    $('#msgShowDataModal').modal('show');
                })


            } else {
                $('#loadingDiv').addClass('d-none');
                $('#wrongDiv').removeClass('d-none');

            }

        }).catch((err) => {
            $('#loadingDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');

        })

}


// Message Seened Code & Function
$('#msgSeenConfirmBtn').click(function() {
    $('#msgShowDataModal').modal('hide');
    let id = $('#modalEditDataID').html();
    messageSeened(id);
})

function messageSeened(msgID) {

    $('#msgSeenConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/messageSeen', { id: msgID })
        .then((res) => {

            if (res.status == 200 && res.data == 1) {
                $('#msgSeenConfirmBtn').html("Seen");
                toastr.success('Seen Success..');
                getMassageData();
            } else {
                $('#msgSeenConfirmBtn').html("Seen");
                toastr.error('Seened Fail..');
            }

        }).catch((err) => {
            $('#msgSeenConfirmBtn').html("Seen");
            toastr.error('Somthing went wrong..');
        })

}



// Review Select By ID
function getMessageByID(msgID) {

    axios.post('/messageSelectByID', { id: msgID })
        .then((res) => {
            if (res.status == 200) {
                $('#massageModalForm').removeClass('d-none');
                $('#editLoadingDiv').addClass('d-none');

                var jsonData = res.data;
                $('#msgName').val(jsonData[0].name);
                $('#msgNumber').val(jsonData[0].email);
                $('#msgMail').val(jsonData[0].mobileNo);
                $('#msgText').val(jsonData[0].msg);

            } else {
                $('#editLoadingDiv').addClass('d-none');
                $('#editWrongDiv').removeClass('d-none');
            }

        }).catch((err) => {
            $('#editLoadingDiv').addClass('d-none');
            $('#editWrongDiv').removeClass('d-none');
        })

}
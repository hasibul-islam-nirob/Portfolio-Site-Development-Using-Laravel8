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




/*
=============================================================
            UnSeen Box
=============================================================
*/

/// Get Unseen Messages
function getSeenedMassageData() {
    axios.get('/getUnseenMassage')
        .then((res) => {

            if (res.status == 200) {
                $('#massageSeenDataTable').removeClass('d-none');
                $('#loadingDiv').addClass('d-none');

                $('#massageSeenTable').empty();

                var jsonData = res.data;

                $.each(jsonData, function(i) {
                    $('<tr>').html(
                        "<td class='th-sm'>" + jsonData[i].name + "</td>" +
                        "<th class='th-sm'>" + jsonData[i].email + "</th>" +
                        "<th class='th-sm'>" + jsonData[i].msg.substr(0, 20) + "...." + "</th>" +
                        "<td class='th-sm'><a class='msgUnseenBtn' data-id=" + jsonData[i].id + "><i class='fas fa-eye-slash'></i></a></td>" +
                        "<td class='th-sm'><a class='msgDeleteBtn' data-id=" + jsonData[i].id + "><i class='fas fa-trash-alt'></i></a></td>"

                    ).appendTo('#massageSeenTable');
                });

                //  Messages Unseen
                $('.msgUnseenBtn').click(function() {
                    let id = $(this).data('id');
                    $('#msgUnSeenModalID').html(id);
                    $('#msgUnSeenModal').modal('show');
                });

                //  Messages Delete
                $('.msgDeleteBtn').click(function() {
                    let id = $(this).data('id');
                    $('#msgDeleteModalID').html(id);
                    $('#msgDeleteModal').modal('show');
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

//  Messages Delete
$('#msgDeleteConfirmBtn').click(function() {
    $('#msgDeleteModal').modal('hide');
    let id = $('#msgDeleteModalID').html();
    messageDelete(id);
})

function messageDelete(msgID) {

    $('#msgDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/deleteMessage', { id: msgID })
        .then((res) => {

            if (res.status == 200 && res.data == 1) {
                $('#msgDeleteConfirmBtn').html("Delete");
                toastr.success('Delete Success..');
                getSeenedMassageData();
            } else {
                $('#msgDeleteConfirmBtn').html("Delete");
                toastr.error('Delete Fail..');
            }

        }).catch((err) => {
            $('#msgDeleteConfirmBtn').html("Delete");
            toastr.error('Somthing went wrong..');
        })

}




// Message Unseen
$('#unSeenConfirmBtn').click(function() {
    $('#msgUnSeenModal').modal('hide');
    let id = $('#msgUnSeenModalID').html();
    messageUnSeen(id);
})

function messageUnSeen(msgID) {

    $('#unSeenConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");

    axios.post('/messageUnSeen', { id: msgID })
        .then((res) => {

            if (res.status == 200 && res.data == 1) {
                $('#unSeenConfirmBtn').html("Uneen");
                toastr.success('UnSeen Success..');
                getSeenedMassageData();
            } else {
                $('#unSeenConfirmBtn').html("Uneen");
                toastr.error('UnSeened Fail..');
            }

        }).catch((err) => {
            $('#unSeenConfirmBtn').html("Uneen");
            toastr.error('Somthing went wrong..');
        })

}
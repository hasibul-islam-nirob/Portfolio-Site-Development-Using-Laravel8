@extends('Layout.App')

@section('content')

<div id="massageSeenDataTable" class="container d-none">

	<div class="row">
		<div class="col-md-12 p-5">

			<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm">Name</th>
                        <th class="th-sm">Mail Address</th>
                        <th class="th-sm">Message</th>
						<th class="th-sm">Unseen</th>
						<th class="th-sm">Delete</th>
					</tr>
				</thead>

				<tbody id="massageSeenTable">
					
					
				</tbody>

			</table>
		</div>
	</div>
</div>

<!-- Loading Div -->
<div id="loadingDiv" class="container ">
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


<!-- Data Unseel Alrt Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="msgUnSeenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="text-center p-3 mt-2" >Do you want to unseen this message  ?</h4>
				<h4 id="msgUnSeenModalID" class="text-center d-none" ></h4>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
				<button id="unSeenConfirmBtn" type="button" class="btn btn-danger btn-sm">Unseen</button>
			</div>
		</div>
	</div>
</div>
<!-- Central Unseel Alrt Modal Small -->


<!-- Data Delete Modal Div -->
<!-- Central Modal Small -->
<div class="modal fade" id="msgDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="text-center p-3 mt-2" >Do you want to delete this message  ?</h4>
				<h4 id="msgDeleteModalID" class="text-center " ></h4>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
				<button id="msgDeleteConfirmBtn" type="button" class="btn btn-danger btn-sm">Delete</button>
			</div>
		</div>
	</div>
</div>
<!-- Central Delete Modal Small -->


@endsection




@section('jsScript')

<script type="text/javascript" >

getSeenedMassageData();



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

</script>

@endsection
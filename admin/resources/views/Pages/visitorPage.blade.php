@extends('Layout.App')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                <thead>
                        <tr>
                            <th width="10%" class="th-sm">NO</th>
                            <th width="20%" class="th-sm">IP Address</th>
                            <th width="50%" class="th-sm">MAC Address</th>
                            <th width="20%" class="th-sm">Date & Time</th>
                        </tr>
                </thead>

                <tbody>

                    @foreach ($visitorData as $item)

                    <tr>
                        <td class="th-sm">{{ $item->id }}</td>
                        <td class="th-sm">{{ $item->ip_address }}</td>
                        <td class="th-sm">{{ $item->mac_address }}</td>
                        <td class="th-sm">{{ $item->visiting_time }}</td>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection



@section('script')
<script>

$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});






</script>
@endsection
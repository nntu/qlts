@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Data Table Demo</div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>MaTS</th>
                                <th>TenTS</th>
                                <th>NgayDuaVaoSD</th>
                                <th>Serrial</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


@stop

@section('css')
    
@stop

@section('js')
 
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('taisan/getIndexData') }}',
        columns: [
            {data: 'MaTS', name: 'MaTS'},
            {data: 'TenTS', name: 'TenTS'},
            {data: 'NgayDuaVaoSD', name: 'NgayDuaVaoSD'},
            {data: 'Serrial', name: 'Serrial'},
        ]
    });
});
</script>
@stop
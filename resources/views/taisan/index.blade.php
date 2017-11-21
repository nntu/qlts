@extends('adminlte::page')


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.5 CRUD Example from scratch</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('taisan.create') }}">Nhập mới tài sản</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    {{ $i = 0}}

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Mã Tài sản</th>

            <th>TenTS</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($taisans as $taisan)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $taisan->MaTs}}</td>

                <td>{{ $taisan->TenTS}}</td>

                <td>

                    <a class="btn btn-info" href="{{ route('taisan.show',$taisan->MaTs) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('taisan.edit',$taisan->MaTs) }}">Edit</a>



                </td>

            </tr>

        @endforeach

    </table>


    {!! $taisan->links() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
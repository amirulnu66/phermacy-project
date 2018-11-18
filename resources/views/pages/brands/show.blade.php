@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Brands </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Brands</a>
        <a href="#" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand" data-toggle="modal" data-target="#globalModal"> Add New Brand</span></a>

    </div>
    <div class="row">
        <div class="col-md-10 padding0">
            <h1>Manage Medicine Brand</h1>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Brand Nane</th>
            <th>Description</th>
            <th>Control</th>

        </tr>
        </thead>
        <tbody>
        {{--list start   --}}
        <tr>
            <td>01</td>
            <td>Aci</td>
            <td>some text</td>
            <td>
                <span data-toggle="modal">
                    <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
            </td>
        </tr>
        <tr>
            <td>02</td>
            <td>Sk plus f</td>
            <td>some text</td>
            <td>
                <span data-toggle="modal">
                    <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
            </td>
        </tr>

        <tr>
            <td>03</td>
            <td>Jashon</td>
            <td>some text</td>
            <td>
                <span data-toggle="modal">
                    <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;

                <span><a href="#" title="Edit" data-target="#globalModal" data-toggle="modal" data-modal-size="modal-md"><span class=" fa fa-pencil-square-o"></span></a></span>

            </td>
        </tr>

     {{--list end   --}}


        </tbody>
    </table>

@endsection

@section('script')

@stop
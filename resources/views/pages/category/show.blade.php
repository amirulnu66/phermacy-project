@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Brands </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Brands</a>
        <a class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add New Brand</span></a>

    </div>

    <table class="table table-bordered">
        <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Brand Nane</th>
            <th>Products Num</th>
            <th>Control</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Paracetamol</td>
            <td>500</td>
            <td>
                <span data-toggle="modal"><a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;

                <span><a href="#" title="Edit" data-target="#globalModal" data-toggle="modal" data-modal-size="modal-md"><span class=" fa fa-pencil-square-o"></span></a></span>

            </td>
            </td>
        </tr>

        </tbody>
    </table>

@endsection

@section('script')

@stop
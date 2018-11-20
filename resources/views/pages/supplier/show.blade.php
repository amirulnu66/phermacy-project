@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Supplier </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Supplier</a>
        <a href="/pharmacy/suppliers/New_suppliers" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Supplier</span></a>
    </div>
        <div class="col-md-12 padding0">
            <h1 class="page-title">Supplier's Records</h1>
        </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 pb-5">
                            <table id="datatable-1" class="table table-datatable table-hover table-responsive">
                                <thead class="thead-default">
                                <tr role="row">
                                    <th>No:</th>
                                    <th>Supplier Nane</th>
                                    <th>Contact</th>
                                    <th>Company</th>
                                    <th>Control</th>
                                </tr>
                                </thead>
                                <tbody>    
                            @if($suppliers)
                                @foreach($suppliers as $index=>$suppler)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$suppler->suppler_name}}</td>
                                    <td>{{$suppler->suppler_number}}</td>
                                    <td>{{$suppler->company->company_name}}</td>
                                    <td>
                                    
                                    <span data-toggle="">
                                            <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                        <span><a href="{{URL::to('/pharmacy/suppliers/edit/'.$suppler->id)}}" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center bold"><strong>No Recodes Found</strong></td>
                                </tr>    
                            @endif                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


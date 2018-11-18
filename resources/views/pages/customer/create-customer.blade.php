@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                </div>
                @elseif(Session::has('error'))
                    <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> {{ Session::get('error') }} </h4>
                    </div>
                @endif
            </div>
            <div class="row">    
                <div class="col-md-12">

                    <h2 style="display:inline-block;">{{$customerInfo?'Manage' : 'Add New'}} Customer</h2>

                    <a href="{{url('/pharmacy/Ccustomer/customer-show')}}" class="btn btn-success pull-right waves-effect waves-light">
                    <span class="batch-icon batch-icon-eye add_brand"> Manage Customer</span></a>
                </div>
            </div>
            <form action="{{URL::to('/pharmacy/Ccustomer/store')}}" method="post" >
                <input type="hidden" name="id" value="{{$customerInfo?$customerInfo->id : 0}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row pb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Customer Name</label>
                            <input type="text" name="customer_name" value="{{$customerInfo?$customerInfo->customer_name: ''}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="text" name="customer_phone" value="{{$customerInfo?$customerInfo->customer_phone : ''}}" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="exampleTextarea" class="">Address</label>
                             <input type="text" name="customer_address" value="{{$customerInfo?$customerInfo->customer_address : ''}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea" class="">Blood Group</label>
                             <input type="text" name="customer_blood" value="{{$customerInfo?$customerInfo->customer_blood : ''}}" class="form-control" >
                        </div>

                    </div><!--clo-12-->

                </div><!--//row-->
                <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">Save</button>
            </form><!--//form-->
        </div>
    </div>

@endsection

@section('script')

@stop
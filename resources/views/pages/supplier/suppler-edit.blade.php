@extends('layouts.master')

@section('content')
<div class="col-md-12">
            @if(Session::has('success'))
                <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                </div>
            @elseif(Session::has('feiled'))
                <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
                </div>
            @endif
        </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Manage Supplier</h2>
                </div>
            </div>

            <form action="{{URL::to('/pharmacy/suppliers/store')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$supplerInfo->id}}">
                <input type="hidden" name="company_id" value="{{$supplerInfo->company_id}}">
                <div class="row pb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Supplier Name</label>
                            <input type="text" name="suppler_name" value="{{$supplerInfo?$supplerInfo->suppler_name : ''}}" class="form-control" autocomplete="off">
                        </div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input type="text" name="suppler_number" value="{{$supplerInfo?$supplerInfo->suppler_number : ''}}" class="form-control" autocomplete="off" >
                        </div>

                        </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Join Date</label>
                            <input type="text" name="join_time" value="{{$supplerInfo?$supplerInfo->join_time : ''}}" class="fallback form-control" autocomplete="off" placeholder="DD/MM/YYYY" maxlength="10">


                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </form>
        </div>
    </div>

@endsection

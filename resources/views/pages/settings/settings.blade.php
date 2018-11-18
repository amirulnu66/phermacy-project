@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Update Settings</h2>
                </div>
            </div>
            <form action="{{URL::to('/settinges/manage-settings')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
                <input type="hidden" name="id" value="{{$settingeInfo->id}}">
                <div class="row pb-5">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="com_name" class="form-control" value="{{$settingeInfo->com_name}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" name="com_email" class="form-control" value="{{$settingeInfo->com_email}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Number</label>
                            <input type="text" name="com_number" class="cep form-control" value="{{$settingeInfo->com_number}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" name="com_address" class="form-control" value="{{$settingeInfo->com_address}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Company Logo</label>
                            <input type="file" name="com_logo" class="form-group">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </form>
        </div>
    </div>

@endsection

@section('script')

@stop
@extends('layouts.master')

@section('style')

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>New Supplier</h2>
                </div>
            </div>

            <form action="">
                <div class="row pb-5">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Supplier Name</label>
                            <input type="text" name="suppler_name" class="form-control" autocomplete="off">
                        </div>
                        </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <select name="company_id" id="company_id" class="form-control">
                            @if(!empty($companies))
                                @foreach($companies as $index=>$company )
                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                        </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input type="text" name="suppler_number" class="form-control" autocomplete="off" >
                        </div>

                        </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Join Date</label>
                            <input type="text" name="join_time" class="fallback form-control" autocomplete="off" placeholder="DD/MM/YYYY" maxlength="10">


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
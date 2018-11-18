@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add New Staff</h2>
                    
                </div>
            </div>
            <form action="">
                <div class="row pb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Staff Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input type="text" name="phone" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label><br>
                            <input type="file" name="sf_iamge" >
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                          
                            <label for="exampleTextarea" class="">Address</label>
                            <textarea class="form-control" rows="2"></textarea>

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
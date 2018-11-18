@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2 style="display: inline-block;"> Add New Medicine</h2>
                    <a style="margin-bottom: 30px;" href="{{url('/pharmacy/products/products-list')}}" class="btn btn-success pull-right waves-effect waves-light">
                        <span class="fa fa-plus-circle add_brand"> Show Medicine</span></a>

                </div>
            </div>
            <form action="">
            <div class="row pb-5 padding-bottom10">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Medicine Name</label>
                                <input type="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Arrival Date</label>
                                <input type="text" class="form-control" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Selling Price</label>
                                <input type="text" class="cep form-control" autocomplete="off">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Genetic Name</label>
                                <input type="text" class="form-control" autocomplete="off">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Store Box</label>
                                <input type="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input type="text" class="money form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Expiry Date</label>
                                <input type="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">

                                <label class="control-label">Net Price</label>
                                <input type="text" class="form-control" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Left Quantity</label>
                                <input type="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Brand Name</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="" selected>Choose an option</option>
                                    <option>Squre</option>
                                    <option>Acme</option>
                                    <option>Drag International</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Medicine Category</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="" selected>Choose an option</option>
                                    <option>tablet</option>
                                    <option>sirup</option>
                                    <option>Capsul</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Suppliper Name</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="" selected>Choose an option</option>
                                    <option>Amirul</option>
                                    <option>Gopal</option>
                                    <option>Jakir</option>
                                    <option>Mamon</option>
                                    <option>Jewel</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleTextarea" class="">Example textarea</label>
                            <textarea class="form-control" cols="1" rows="1"></textarea>
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
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
            <form action="" method="post">
            <div class="row pb-5 padding-bottom10">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Medicine Name *</label>
                                <input type="text" name="medi_name" class="form-control" required>
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">

                                <label class="control-label">Net Price *</label>
                                <input type="text" name="medi_net_price" class="form-control"  required>
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Selling Price </label>
                                <input type="text" name="medi_sell_price" class="cep form-control"  required>
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Store Box</label>
                                <input type="text" name="medi_box" class="form-control" >
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input type="text" name="medi_quantity" class="money form-control" >
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Expiry Date</label>
                                <input type="text" name="medi_expire" class="form-control" required>
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Rack *</label>                               
                                    <select class="form-control" name="rack_id" id="exampleSelect1" required="required">
                                        <option disabled selected>Choose an one</option>
                                        <option value="">1</option>
                                        <option value="">10</option>
                                        <option value="">5</option>
                                    </select>
                                
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Effects</label>
                                <input type="text" name="medi_quantity" class="money form-control" >
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Supplier Name</label>
                                @if(!empty($suppliers))
                                    <select class="form-control" name="suppler_id" id="exampleSelect1" required="required">
                                        <option disabled selected>Choose an one</option>
                                        @foreach($suppliers as $suppler)
                                            <option value="{{$suppler->id}}">{{$suppler->suppler_name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Company Name</label>
                                @if(!empty($companies))
                                    <select class="form-control" name="company_id" id="exampleSelect1" required="required">
                                        <option disabled selected>Choose an one</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company->id}}">{{$company->company_name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div><!-- .//col-md-4 -->
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="exampleSelect1">Medicine Category</label>
                                @if(!empty($categories))
                                    <select class="form-control" name="category_id" id="exampleSelect1" required="required">
                                        <option disabled selected>Choose an one</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->medicin_cate}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div><!-- .//col-md-4 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Supplier Inv. No. *</label>
                                <input type="text" name="medi_expire" class="form-control" required>
                            </div>
                        </div>
                        <!-- .//col-md-4 -->
                        
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
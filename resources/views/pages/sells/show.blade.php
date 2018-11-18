@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Medicine </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Medicine</a>
        <a href="{{URL::to('/pharmacy/products/add_new_porduct')}}" class="btn btn-info pull-right waves-effect waves-light pull-right">
                            <i class="batch-icon batch-icon-add"></i>Add Item</a>     
        <a href="{{url('/pharmacy/medicine/sells-invoice')}}" class="btn btn-success pull-right waves-effect waves-light">
            <span class="batch-icon batch-icon-eye "> Sells Records</span></a>
    </div>
        <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 title-font">
            <form>
                <div class="row">
                    <div class="form-group col-md-7">
                        <label for="exampleSelect1">Choose Product (Sells Section)</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="exampleSelect1">Quantity</label>
                        <input type="number" class="form-control" autocomplete="off" >
                    </div>
                    <div class="col-md-3">
                        <label for="exampleSelect1" style="visibility: hidden;">button</label>
                        <form class="col-md-6 px-0 my-2 my-lg-0 no-waves-effect">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Customer Id..." aria-label="customer Id " aria-describedby="basic-addon2">
                            </div>
                        </form>

                    </div>
                </div>
            </form>
        </div>
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
                                    <th>SL. No.</th>
                                    <th>Medicine Nane</th>
                                    <th>Generic Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Profite</th>
                                    <th>Control</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>01</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>

                                        <td>
                                            <span data-toggle="modal"><a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                            <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


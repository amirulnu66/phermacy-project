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
            
                <div class="row">
                <table class="table table-bordered table-striped pos-table">
                    <thead>
                        <tr>
                            <th width="35%">Medicine (Batch No)</th>
                            <th width="5%">Remaining Quantity</th>
                            <th width="5%">Quantity</th>
                            <th width="10%">MRP</th>
                            <th width="10%">Discount (%)</th>
                            <th width="10%">Total</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <form name ="explanation"action="test" method="post">
                                <input type="text" id="datahere" class="form-control" placeholder="Search for..."/>
                                <select id="selectoption" class="form-control">
                                    <option>Paracetamol</option>
                                    <option>Napa</option>
                                    <option>ABC Cure</option>
                                    <option>Multivitamin</option>
                                    <option>Ebatin</option>
                                </select>
                            </form>
                            </td>
                            <td id="rem_quantity" align="center">1</td>
                            <td><input name="Billing[quantity]" autocomplete="off" id="quantity" class="form-control" type="text"></td>
                            <!--<td></td>-->
                            <td><input name="Billing[price]" readonly="readonly" autocomplete="off" required="required" id="price" class="form-control" maxlength="255" type="text"></td>
                            <td><input name="Billing[discount]" autocomplete="off" id="discount" class="form-control" maxlength="255" type="text"></td>
                            <td><input name="Billing[tax]" autocomplete="off" id="tax" class="form-control" maxlength="255" type="text"></td>
                            <td><input name="Billing[tprice]" readonly="readonly" autocomplete="off" id="tprice" class="form-control" maxlength="255" type="text"></td>
                            <td><button type="button" class="btn btn-success" id="add"> ADD</button></td>

                        </tr>
                    </tbody>
                                                                                										
				</table>
                </div>
            
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 pb-5">
                            <table id="datatable-1" class="table table-datatable table-hover table-responsive text-center pos-table">
                                <thead class="thead-default">
                                <tr role="row">
                                    <th>SL.</th>
                                    <th>Medicine Nane</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>01</td>
                                        <td>Paracetamol</td>
                                        <td>120</td>
                                        <td width="60px;" style="width:50px;">
                                            <input type="text" onkeyup="amend_qty(this.value,'2')" class="supply_fields text-center" name="supply_qty" value="1" id="supply_qty" style="width:60px;">
                                        </td>
                                        <td>120</td>
                                        <td>
                                            <span data-toggle="modal"><a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="120px;">Total Cash : 
                                        
                                        </td>
                                        <td width="120px;"><input type="text" onkeyup="amend_qty(this.value,'2')" class="supply_fields text-center" name="supply_qty" id="supply_qty"></td>
                                        <td></td>
                                    </tr>

                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="120px;">Cash Recieved : 
                                        
                                        </td>
                                        <td width="120px;"><input type="text" onkeyup="amend_qty(this.value,'2')" class="supply_fields text-center" name="supply_qty" id="supply_qty"></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="120px;">Cash Refund :
                                        
                                        </td>
                                        <td width="120px;"><input type="text" onkeyup="amend_qty(this.value,'2')" class="supply_fields text-center" name="supply_qty" id="supply_qty"></td>
                                        <td width="160px;">
                                        <button type="submit" class="btn btn-info payemnt-btn" style="padding:8px 6px;"><span class="fa fa-money"></span> Payment</button>
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


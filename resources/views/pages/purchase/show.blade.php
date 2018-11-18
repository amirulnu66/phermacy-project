@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Purchases </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Purchases</a>
        <a href="{{url('/pharmacy/Ccustomer/customer')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Medicine</span></a>
        <a href="{{url('/pharmacy/medicine/medicine-sells')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> New Sell</span></a>

    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-10 title-font">
                <h1>Purchases Reports (Add product table theke asbe)</h1>
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
                                    <tr>
                                        <th>Reference</th>
                                        <th>Supplier</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                                      </thead>
                                         <tbody>
                                            
                                         <tr>

                                            <td>NS-000001</td>
                                            <td>Wallet</td>
                                            
                                            <td>50</td>
                                            <td>25-03-18</td>
                                            <td>0.00</td>
                                           
                                            
                                         </tr>
                                         <tr>

                                             <td>NS-000002</td>
                                            <td>Wallet</td>
                                            
                                            <td>500</td>
                                             <td>26-03-18</td>
                                             <td>0.00</td>
                                           
                                           
                                         </tr>
                                         <tr>

                                             <td>NS-000003</td>
                                            <td>Wallet</td>
                                           
                                            <td>300</td>
                                            <td>26-03-18</td>
                                            <td>0.00</td>
                                           
                                             
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

@section('script')

@stop


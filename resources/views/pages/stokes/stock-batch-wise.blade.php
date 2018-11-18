@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Invoice </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Invoice</a>
         <a href="{{url('/pharmacy/medicine/medicine-sells')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-list add_brand"> Stoke Report(Stoke Report)</span></a>
                
        <a href="{{url('/pharmacy/Creport/stock-report-product-wise')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-list add_brand"> Stoke Report(Product Wise)</span></a>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-10 title-font">
                <h1>Stock Report (Batch Wise)</h1>
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
                                        <th>SL</th>
                                        <th>Medicine Name</th>
                                        <th>Medicine Model</th>
                                        <th>Expire Date</th>
                                        <th>In Quantity</th>
                                        <th>Out Quantity</th>
                                        <th>Stock</th>
                                        <th>Stock Sell</th>
                                       

                                    </tr>
                                      </thead>
                                         <tbody>
                                            
                                         <tr>

                                            <td>01</td>
                                            <td>Napa</td>
                                            <td>Napa-500mg</td>
                                            <td>26.12.18</td>
                                            <td>1000</td>
                                            <td>600</td>
                                            <td>400</td>
                                            <td>2000</td>
                                             
                                         </tr>
                                         <tr>

                                            <td>02</td>
                                            <td>Neuro-B</td>
                                            <td>Neuro-B-B12</td>
                                            <td>240.00</td>
                                            <td>10</td>
                                            <td>6</td>
                                            <td>4</td>
                                            <td>15</td>
                                             
                                         </tr>
                                         <tr>

                                            <td>03</td>
                                            <td>Beklo</td>
                                            <td>Beklo BP-10mg</td>
                                            <td>90.00</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>15</td>
                                             
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


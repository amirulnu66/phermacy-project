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
                <h1>Inventory Reports (Add product table theke asbe)</h1>
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
                                        <th>Name</th>
                                        <th>Inventory</th>
                                        <th>Supplier</th>
                                        <th>Cost Value</th>
                                        <th>Sales Value</th>
                                        <th>Profite</th>
                                        <th>Control</th>

                                    </tr>
                                      </thead>
                                         <tbody>
                                            
                                         <tr>

                                            <td>Omeprazole</td>
                                            <td>100</td>
                                            <td>wallet</td>
                                            <td>450/=</td>
                                            <td>500/=</td>
                                            <td>50/=</td>
                                            <td>
                                                  
                                                 <span><a href="#" class="fa fa-edit pointer text-success edit_record"></a></span>
                                                 &nbsp; | &nbsp;
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>

                                             </td>
                                           
                                         </tr>
                                         <tr>
                                            <td>Napa</td>
                                            <td>1000</td>
                                            <td>wallet</td>
                                            <td>1500</td>
                                            <td>2000</td>
                                            <td>500/=</td>
                                            <td>
                                                      
                                                 <span><a href="#" class="fa fa-edit pointer text-success edit_record"></a></span>
                                                 &nbsp; | &nbsp;
                                                 <span data-toggle="modal">
                                                <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>

                                             </td>
                                            
                                         </tr>
                                         <tr>
                                           <td>Amodis</td>
                                            <td>40</td>
                                            <td>wallet</td>
                                            <td>100/=</td>
                                            <td>120/=</td>
                                            <td>20/=</td>
                                            <td>
                                                    
                                                <span><a href="#" class="fa fa-edit pointer text-success edit_record"></a></span>
                                                 &nbsp; | &nbsp;
                                                 <span data-toggle="modal">
                                                <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>

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

@section('script')
    <!-- Datatables -->
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

@stop


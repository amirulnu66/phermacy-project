@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Customer </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Customer</a>
        <a href="{{url('/pharmacy/Ccustomer/customer')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Customer</span></a>

            <a href="{{url('/pharmacy/Ccustomer/manage-customer')}}" class="btn btn-primary pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Manage Customer</span></a>

            <a href="{{url('/pharmacy/Ccustomer/credit_customer')}}" class="btn btn-success pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Credit Customer</span></a>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-10 title-font">
                <h1>Manage Paid Customer</h1>
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
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Amount</th>
                                        <th>Control</th>

                                    </tr>
                                      </thead>
                                         <tbody>
                                    @for($i=0; $i<6; $i++)        
                                         <tr>

                                             <td>01</td>
                                            <td>Amirul</td>
                                            <td>0174063****</td>
                                            <td>Rajshahi</td>
                                            <td>0.00</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                                 <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                             </td>
                                         </tr>
                                       @endfor  
                                         
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


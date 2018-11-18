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
            <a href="{{url('/pharmacy/Ccustomer/customer')}}" class="btn btn-primary pull-right waves-effect waves-light">
            <span class="fa fa-check-circle add_brand"> Credit Customer</span></a>
            <a href="{{url('/pharmacy/Ccustomer/paid_customer')}}" class="btn btn-success pull-right waves-effect waves-light">
            <span class="fa fa-check-circle add_brand"> Paid Customer</span></a>


    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-10 title-font">
                <h1>Manage Customer</h1>
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
                                        <th>Blood Group</th>
                                        <th>Age</th>
                                        <th>Weight</th>
                                        <th>Control</th>

                                    </tr>
                                      </thead>
                                         <tbody>
                                    @if($allcustomers)  
                                        @foreach($allcustomers as $index=>$customer)
                                         <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$customer->customer_name}}</td>
                                            <td>{{$customer->customer_phone}}</td>
                                            <td>{{$customer->customer_address}}</td>
                                            <td>{{$customer->customer_blood}}</td>
                                            <td>{{$customer->customer_age}}</td>
                                            <td>{{$customer->customer_weight}}</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="{{url('/pharmacy/Ccustomer/customer/delete/'.$customer->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                                 <span><a href="{{URL::to('/pharmacy/Ccustomer/edit/'.$customer->id)}}" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                             </td>
                                         </tr>
                                        @endforeach 
                                    @endif 
                                         
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


@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Staff </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Staff</a>
        <a href="{{url('/pharmacy/staff/accountant')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Staff</span></a>

    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-10 title-font">
                <h1>Manage Staff</h1>
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
                                        <th>Image</th>
                                        <th>Staff Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Control</th>

                                    </tr>
                                      </thead>
                                         <tbody>
                                          
                                         <tr>

                                             <td>01</td>
                                            <td>Picture</td>
                                            <td>manager</td>
                                            <td>pintu123@gmail.com</td>
                                            <td>0174063****</td>
                                            <td>Rajshahi</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                                 <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                             </td>
                                         </tr>
                                         <tr>

                                             <td>01</td>
                                            <td>Picture</td>
                                            <td>Admin</td>
                                            <td>admin@gmail.com</td>
                                            <td>0174063****</td>
                                            <td>Rajshahi</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
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

@section('script')

@stop


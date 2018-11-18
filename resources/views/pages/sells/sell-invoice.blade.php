@extends('layouts.master')
@section('style')

@stop
@section('content')
     <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Invoice </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Invoice</a>
        <a href="{{url('/pharmacy/products/add_new_porduct')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Medicine</span></a>
        <a href="{{url('/pharmacy/medicine/medicine-sells')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> New Sell</span></a>

    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 title-font">
                <h1>Manage Sells Invoice</h1>
            </div>
        </div>

           <div class="clearfix"></div>    
        <div class="row"> 
            <div class="form-group col-md-3">
                <label class="control-label">Form</label>
                <input class="fallback form-control" autocomplete="off" placeholder="DD/MM/YYYY" maxlength="10" type="text">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label">To</label>
                <input class="clear-if-not-match form-control" autocomplete="off" placeholder="DD/MM/YYYY" maxlength="10" type="text">
            </div>
            <div class="form-group col-md-2">
                <label class="control-label">Customer</label>
                <select class="form-control" id="exampleSelect1">
                    <option>Select</option>
                    <option>Customer Name</option>
                    <option>Customer Name</option>
                    <option>Customer Name</option>
                    <option>Customer Name</option>
                    <option>Customer Name</option>
                </select>
            </div>
            <div class="col-md-2" style="display: none;"></div>
            <div class="col-md-1" style="padding-left: 0; padding-right: 0; ">
              <div class="form-group">
                <label for="exampleInputEmail1">&nbsp;</label>
                <div class="input-group">
                  <button type="submit" name="btn" class="btn btn-info btn-sm sells-serachbtn">submit</button>
                </div>
              </div>
            </div>
            <div class="col-md-1" style="padding-left: 0;">
              <div class="form-group" style="width: 145px;">
                <label for="exampleInputEmail1">&nbsp;</label>
                <div class="input-group ">
                  <button name="btn" id="pdf" class="btn btn-info btn-sm pdfBtn">PDF</button>
                  <!-- <button name="btn" id="csv" class="btn btn-info btn-sm csvBtn">CSV</button> -->
                </div>
              </div>
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
                                        <th>Customer</th>
                                        <th>Quenty</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Date</th>
                                        <th>Control</th>

                                    </tr>
                                      </thead>
                                         <tbody>
                                            
                                         <tr>

                                             <td>NS-000001</td>
                                            <td>Wallet</td>
                                            <td>1</td>
                                            <td>50</td>
                                            <td>0</td>
                                            <td>25-03-18</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                                 <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                             </td>
                                         </tr>
                                         <tr>

                                             <td>NS-000002</td>
                                            <td>Wallet</td>
                                            <td>5</td>
                                            <td>500</td>
                                            <td>0</td>
                                            <td>26-03-18</td>
                                             <td>
                                                 <span data-toggle="modal">
                                                        <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                                 <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                             </td>
                                         </tr>
                                         <tr>

                                             <td>NS-000003</td>
                                            <td>Wallet</td>
                                            <td>3</td>
                                            <td>300</td>
                                            <td>0</td>
                                            <td>26-03-18</td>
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
    <!-- Datatables -->
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

 <!-- <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.4/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.4/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->

 <!--    <script>
      $('#datepicker').datepicker({
            showOtherMonths: true
        });
      $('#datepicker2').datepicker({
            showOtherMonths: true
        });
    </script> -->

@stop


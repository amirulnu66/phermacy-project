@extends('layouts.master')
@section('style')

@stop
@section('content')
    <div class="col-md-12">
        @if(Session::has('message'))
            <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> {{ Session::get('message') }} </h4>
            </div>
        @elseif(Session::has('errors'))
            <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> {{ Session::get('errors') }} </h4>
            </div>
        @endif
    </div>
    <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 style="display: inline-block;"> Manage Company</h2>
                <a style="margin-bottom: 30px;" href="#" class="btn btn-success pull-right waves-effect waves-light" data-target="#comModal" data-toggle="modal">
                    <span class="fa fa-plus-circle add_brand">Add Company </span></a>

            </div>

        <div class="col-md-12">
            <div class="categoir-inner">
                <table class="table table-bordered text-center">
                    <thead class="thead-default">
                    <tr>
                        <th>Ls</th>
                        <th>Company Name</th>
                        <th>Control</th>

                    </tr>
                    </thead>
                    <tbody>
                    <!--This variable get companycontroller  -->
                    @if(!empty($companies))
                        @foreach($companies as $index=>$compani)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$compani->company_name}}</td>
                                <td>
                                    <span><a href="{{URL::to('/company/data/delete/'.$compani->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;

                                    <span><a href="{{url('/company/data-edit/'.$compani->id)}}" title="Edit" data-comid="{{$compani->id}}" data-mytitle="{{$compani->company_name}}" data-target="#comModal" data-toggle="modal" data-modal-size="modal-md"><span class=" fa fa-pencil-square-o"></span></a></span>

                                </td>
                            </tr>
                        @endforeach    
                    @else
                        <tr>
                            <td colspan="3"><strong>No Recodes Found</strong></td>
                        </tr>       

                    @endif

                    </tbody>
                </table>
            </div>
        </div><!--//col-6-->

    </div>
    {{--model section--}}

@section('model-body')
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Manage Company </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form role="form" action="{{URL::to('/company/data-store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-body">
            <div class="container-fluid">

                <input type="hidden" name="id" id="company_id" value="">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Company Name</label>
                    <input class="form-control" id="com_name" value="" name="company_name" type="text">
                </div>

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </form>
@stop
{{--model section end--}}

{{--.//row--}}

@endsection



@section('script')
    <!-- Datatables -->
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

@stop
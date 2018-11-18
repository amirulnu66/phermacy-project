@extends('layouts.master')
@section('style')

@stop
@section('content')
        <div class="col-md-12">
            @if(Session::has('success'))
                <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                </div>
            @elseif(Session::has('feiled'))
                <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
                </div>
            @endif
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="categoir-inner">
                    <form action="{{url('/pharmacy/category/category/update')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label class="control-label">New Medicine Category</label>
                            <input type="text" name="medicin_cate" class="form-control" autocomplete="off" required>
                        </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
               </div>
            </div>
                <!--//col-6-->

                <div class="col-md-6">
                    <div class="categoir-inner">
                    <table class="table table-bordered text-center">
                        <thead class="thead-default">
                        <tr>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Control</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($medicinCateList)
                            @foreach($medicinCateList as $index=>$catagory)

                        <tr>
                            <td>{{ $index+1}}</td>
                            <td>{{$catagory->medicin_cate}}</td>
                            <td>
                            <span data-toggle="modal"><a href="{{url('/pharmacy/category/delete/'.$catagory->id)}}" onclick="return confirm('Are you sure you want to delete this !');" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
{{--                                <span><a href="{{url('/pharmacy/category/category/edit/'.$catagory->id)}}" class="fa fa-edit pointer text-warning edit_record" data-target="#globalModal" data-toggle="modal"></a></span>--}}
                                <span><a href="{{url('/pharmacy/category/category/edit/'.$catagory->id)}}" title="Edit" data-catid="{{$catagory->id}}" data-mytitle="{{$catagory->medicin_cate}}" data-target="#globalModal" data-toggle="modal" data-modal-size="modal-md"><span class=" fa fa-pencil-square-o"></span></a></span>

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
        <h5 class="modal-title" id="exampleModalLongTitle">Manage Medicine Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form role="form" action="{{URL::to('/pharmacy/category/category/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-body">
            <div class="container-fluid">

                <input type="hidden" name="id" id="cate_id" value="">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Category Name</label>
                    <input class="form-control" id="cate_name" value="" name="medicin_cate" type="text">
                </div>

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
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
@extends('layouts.master')
@section('style')

@stop
@section('content')
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bnd-addmodel">
            <h4 class="modal-title bnd-title"><i class="fa fa-plus-circle"></i>  Create Medicine Brand</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <form role="form" action="medicine/addNewCategory" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Brand Name</label>
                    <input class="form-control" name="category" id="exampleInputEmail1" value="" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Description</label>
                    <input class="form-control" name="description" id="exampleInputEmail1" value="" placeholder="" type="text">
                </div>
                <input name="id" value="" type="hidden">
                <button type="submit" name="submit" class="btn btn-info"> Submit</button>
            </form>
        </div>
    </div><!-- /.modal-content -->
</div>

@endsection

@section('script')

@stop
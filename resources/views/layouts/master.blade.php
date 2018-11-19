<!DOCTYPE html>
<html lang="en">
@section('title','Nur | Pharmacy Management System')
@include('layouts.includes.main_header')

<body>

<div class="container-fluid">
    <div class="row">
        <!-- left navbar -->
        @include('layouts.includes.sidebar')
        <div class="right-column">
        <!-- top nav bar -->
         @include('layouts.includes.topbar')
         
            <main class="main-content p-5" role="main">

                @yield('content')

                <div class="row mb-4">
                    <div class="col-md-12">
                        <footer>
                            Powered by - <a href="#" target="_blank" style="font-weight:300;color:#ffffff;background:#1d1d1d;padding:0 3px;">Md<span style="color:#ffa733;font-weight:bold"></span>&nbsp;Amirul Islam</a>
                        </footer>

                        {{--model section--}}
                        <div class="modal fade" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    @yield('model-body')

                                </div>
                            </div>
                        </div>
                        {{--model section end--}}


                    </div>
            </div>
        </main>
    </div>
</div>
</div>
{{--global model--}}


<!-- javascript file -->
@include('layouts.includes.script')

<script>
    $('#globalModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var title = button.data('mytitle') // Extract info from data-* attributes
        var cateId = button.data('catid') // Extract info from data-* attributes

        var title2 = button.data('comtitle') // Extract info from data-* attributes
        var comId = button.data('comid') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body #cate_name').val(title)
        modal.find('.modal-body #cate_id').val(cateId)

        modal.find('.modal-body #com_name').val(title2)
        modal.find('.modal-body #company_id').val(comId)
    })
</script>

</body>

</html>

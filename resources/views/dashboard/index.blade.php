@extends('layouts.master')
@section('style')

@stop
@section('content')
      <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-gb fa fa-list batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">5 +</div>
                        <div class="tile-description">Shelfs</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-red fa fa-medkit batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">500</div>
                        <div class="tile-description">Total Medicines</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">

                        <i class="batch-icon icon-red fa fa-area-chart batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">26</div>
                        <div class="tile-description">Total Stocks</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-gb fa fa-users batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">476</div>
                        <div class="tile-description">Total Supplies</div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
                    <div class="tile-left">
                        <i class="batch-icon icon-plus fa fa-cart-plus batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">7</div>
                        <div class="tile-description">No of Purchase</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-plus fa fa-money batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">476</div>
                        <div class="tile-description">Total Purchase</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-plus fa fa-cart-plus batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">26</div>
                        <div class="tile-description">No of Sales</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
            <div class="card card-tile card-xs text-center">
                <div class="card-body p-4">
                    <div class="tile-left">
                        <i class="batch-icon icon-plus fa fa-money batch-icon-xxl"></i>
                    </div>
                    <div class="tile-right">
                        <div class="tile-number">476</div>
                        <div class="tile-description">Total Sales</div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="row">
    <div class="col-md-6 col-lg-6 col-xl-8 mb-5">
        <div class="card card-md">
            <div class="card-header">Stacked Bar Chart<div class="header-btn-block"><span class="data-range dropdown"><a to="#!" class="btn btn-primary dropdown-toggle" id="navbar-dropdown-traffic-sources-header-button" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false"><i class="batch-icon batch-icon-calendar"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-traffic-sources-header-button"><a class="dropdown-item" href="today">Today</a><a class="dropdown-item active" href="week">This Week</a><a class="dropdown-item" href="month">This Month</a><a class="dropdown-item" href="year">This Year</a></div>
            </span></div></div>
            <div class="card-body">
                <div class="card-chart" data-chart-color-1="#07a7e3" data-chart-color-2="#32dac3" data-chart-legend-1="Sales ($)" data-chart-legend-2="Orders"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas id="demo-stacked-chart" width="430" height="281" style="display: block; width: 430px; height: 281px;"></canvas>
                </div>
        </div>
    </div>
       
    </div>

    <div class="col-md-6 col-lg-6 col-xl-4 mb-5">
        <div class="card card-md">
            <div class="card-header">
                Traffic Sources
                <div class="header-btn-block">

                </div>
            </div>
            <div class="card-body text-center">
                <p class="text-left"><span class="sale_color"></span>Sales:TK-12000.00 <br><br><span class="expense_color"></span>Expense:TK-15000.00</p>


            </div>

        </div>
    </div>

</div>
<!-- latest customer -->
<section class="col-lg-12 connectedSortable" style="padding: 0;">
    <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title last-custo"><i class="fa fa-truck" aria-hidden="true"></i> Latest Customer</h3>
                <div class="box-tools pull-right">
                    <span class="label label-primary"><i class="fa fa-truck" aria-hidden="true"></i> 4 New Customer</span>

                </div>
            </div>
        <!-- /.box-header -->
        <div id="myDIV" class="box-body no-padding">
            <ul class="users-list clearfix">
                <li>
                        <img width="100" height="100" src="https://pencil.spantiklab.com/uploads/customers/default.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Walk in </a>
                        <span class="users-list-date">01715932630</span>
                    </li>
                <li>
                        <img width="100" height="100" src="https://pencil.spantiklab.com/uploads/customers/default.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Jhon doe</a>
                        <span class="users-list-date">01715932630</span>
                    </li>
                <li>
                        <img width="100" height="100" src="https://pencil.spantiklab.com/uploads/customers/default.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Bhushan Gautam</a>
                        <span class="users-list-date">9825566668</span>
                    </li>
                <li>
                        <img width="100" height="100" src="https://pencil.spantiklab.com/uploads/customers/default.jpg" alt="User Image">
                        <a class="users-list-name" href="#">hello</a>
                        <span class="users-list-date">01715932630</span>
                </li>
            </ul>
        </div>
        <div class="box-footer text-center">
            <a href="{{URL::to('/pharmacy/Ccustomer/manage-customer')}}" class="uppercase"><i class="fa fa-clipboard" aria-hidden="true"></i> View All Customer</a>
        </div>
    </div>

</section>

@endsection


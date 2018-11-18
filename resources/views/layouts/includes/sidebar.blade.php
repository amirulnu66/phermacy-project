<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="logo-nav-item">
            <a class="navbar-brand" href="{{url('/admin/dashboard')}}">
                <img src="{{ URL::to('/assets/img/plogo.jpg') }}" width="36" height="30" alt="QuillPro">
                Nur <span style="color: #1ec3d2;">Pharmacy</span> 
            </a>

        </li>
        <li>
            <h6 class="nav-header">Dashboard</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/pharmacy/medicine/medicine-sells')}}">
                <i class="batch-icon fa fa-shopping-cart"></i>
                New Sell
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="batch-icon fa fa-link"></i>
                Referrers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
                <i class="batch-icon batch-icon-store"></i>
                Medicine
            </a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{URl::to('/pharmacy/category/categories')}}">Medicine category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URl::to('/pharmacy/products/products-list')}}">Manage Medicine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/pharmacy/Brands/brands')}}">Brands</a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pharmacy/medicine/sells-invoice')}}">
                <i class="batch-icon fa fa-bar-chart-o"></i>
                Sells Query
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="batch-icon batch-icon-list-alt"></i>
               Invoice Query
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
                <i class="batch-icon batch-icon-list-alt"></i>
                Reports
            </a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/products/envantory-list')}}">Inventory Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/products/purchase-list')}}">Purchase Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/medicine/sells-invoice')}}">Sales Reports</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pharmacy/Ccustomer/manage-customer')}}">
            <i class="batch-icon batch-icon-user"></i>
                Customer
            </a>

        </li>


        <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
                <i class="batch-icon batch-icon-users"></i>
                Users
            </a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/pharmacy/suppliers')}}">Suppliers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/staff/manage-accountant')}}">Staff</a>
                </li>
            </ul>
        </li>

        
         <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
                <i class="batch-icon fa fa-bar-chart"></i>
                Stock 
            </a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/Creport/stoke-reports')}}">Stock Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/Creport/stock-report-supplier-wise')}}">Stock RP(Supplier Ws)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/Creport/stock-report-product-wise')}}">Stock RP(Product Ws)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pharmacy/Creport/stock-report-batch-wise')}}">Stock RP(Batch Wise)</a>
                </li>
            </ul>
        </li>
         <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
                <i class="batch-icon fa fa-money"></i>
                Accounts 
            </a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Create Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Manage Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Receipt</a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="batch-icon fa fa-envelope"></i>
                Email Request
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="batch-icon fa fa-cogs"></i>
                Company
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/company/manage-company')}}">
                <i class="batch-icon fa fa-recycle"></i>
                backup
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="batch-icon fa fa-user-o"></i>
                Update profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/settinge/settings-info')}}">
                <i class="batch-icon fa fa-cog"></i>
                Settings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="batch-icon fa fa-power-off"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>


      
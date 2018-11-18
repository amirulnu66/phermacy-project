<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
        </button>

        <div class="navbar-collapse" id="navbar-header-content">
            <ul class="navbar-nav navbar-language-translation mr-auto">
                <h3>Pharmacy Management</h3>
            </ul>
            <ul class="navbar-nav navbar-notifications float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                        <i class="batch-icon batch-icon-search"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search">
                        <li>
                            <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
										<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">Search</button>
									</span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-5 navbar-profile">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                        <div class="profile-name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="profile-picture bg-gradient bg-primary has-message float-right">
                            <img src="{{ URL::to('/assets/img/profile.jpg') }}" width="44" height="44">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">

                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav> 
   
<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        {{ config('app.name') }}
    </a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#">
        <i data-feather="menu"></i>
    </button>
    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-2 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><img class="img-fluid" src="{{ Auth::user()->getAvatarUrl() }}"/></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="{{ Auth::user()->getAvatarUrl() }}"/>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="dropdown-user-details-email">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    @lang('Account')
                </a>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    @lang('Logout')
                </a>
            </div>
        </li>
    </ul>
</nav>

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset('images/logo.svg') }}" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <button class="btn btn-sm btn-success" id="notificationDropdown" href="#" data-toggle="dropdown">
                    Click2Call
                </button>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-sm btn-success" id="notificationDropdown" href="#" data-toggle="dropdown">
                    CallTransfer
                </button>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-sm btn-success" id="notificationDropdown" href="#" data-toggle="dropdown">
                    MyIngroups
                </button>
            </li>
            <li class="nav-item dropdown">
                <div class="btn btn-sm btn-success" style="cursor: default;">
                    No LiveCall
                </div>
            </li>

            <li class="nav-item dropdown">
                <button class="btn btn-sm btn-{{($user_detail->status=='ACTIVE')?('success'):('danger')}} dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    {{ $user_detail->status}} </button>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-checkbox-marked text-primary stat-item me-2"  data-item="ACTIVE"></i>ACTIVE</a>
                    <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-checkbox-marked text-primary stat-item me-2" data-item="TRAINING BREAK"></i>TRAINING BREAK</a>
                    <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-checkbox-marked text-primary stat-item me-2" data-item="OFFICIAL BREAK"></i>OFFICIAL BREAK</a>
                    <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-checkbox-marked text-primary stat-item me-2" data-item="LUNCH BREAK"></i>LUNCH BREAK</a>
                    <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-checkbox-marked text-primary stat-item me-2" data-item="TEA BREAK"></i>TEA BREAK</a>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ asset('images/faces/face28.jpg') }}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Change Password
                    </a>
                    <form action="{{ route('logout') }}">
                        <button type="submit" class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>

<div class="col-3 col-xxl-2 mx-sidenav d-none d-xl-block">
    <!-- Side Nav  -->
    <div class="mx-sidenav__content t-bg-primary">
        <!-- Side Nav Brand  -->
        <div class="mx-sidenav__brand">
            <a href="{{route('admin.dashboard')}}" class="mx-sidenav__logo t-link">
                <img src="{{ asset('assets/img/logo-w.png') }}" alt="Adminage" class="img-fluid mx-sidenav__logo-is">
            </a>
            <a href="{{route('admin.dashboard')}}" class="t-link mx-sidenav__logo-sm">
                <img src="{{ asset('assets/img/logo-w-sm.png') }}" alt="Adminage" class="img-fluid mx-sidenav__logo-sm-is">
            </a>
        </div>
        <!-- Side Nav Brand  End-->
        <div class="mx-sidenav__menu-container">
            <nav class="mx-sidenav__menu">
                <ul class="t-list mx-sidenav__menu-is">

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.dashboard') ? 'active-page' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <span class='bx bx-category'></span>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                dashboard
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub {{ url()->current() == route('admin.user.create') ? 'active-page' : (url()->current() == route('admin.users') ? 'active-page': '' ) }}">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <span class='bx bx-user-circle'></span>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                user
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="{{ route('admin.user.create') }}" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bxs-user-plus'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        Create User
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="{{ route('admin.users') }}" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bxs-user-detail'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        All Users
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.user.profile') ? 'active-page' : '' }}">
                        <a href="{{ route('admin.user.profile') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-user-account'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                profile
                            </span>
                        </a>
                    </li>

                    
                    <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.employees') ? 'active-page' : '' }}">
                        <a href="{{ route('admin.employees') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-select-multiple'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                Employees
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <!-- Side Nav End -->
</div>
<!--SideNav / Display Only Large Screen End -->



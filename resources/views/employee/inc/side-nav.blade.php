<div class="col-3 col-xxl-2 mx-sidenav d-none d-xl-block">
    <!-- Side Nav  -->
    <div class="mx-sidenav__content t-bg-primary">
        <!-- Side Nav Brand  -->
        <div class="mx-sidenav__brand">
            <a href="{{route('employee.dashboard')}}" class="mx-sidenav__logo t-link">
                <img src="{{ asset('assets/img/logo-w.png') }}" alt="Adminage" class="img-fluid mx-sidenav__logo-is">
            </a>
            <a href="{{route('employee.dashboard')}}" class="t-link mx-sidenav__logo-sm">
                <img src="{{ asset('assets/img/logo-w-sm.png') }}" alt="Adminage" class="img-fluid mx-sidenav__logo-sm-is">
            </a>
        </div>
        <!-- Side Nav Brand  End-->
        <div class="mx-sidenav__menu-container">
            <nav class="mx-sidenav__menu">
                <ul class="t-list mx-sidenav__menu-is">

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('employee.dashboard') ? 'active-page' : '' }}">
                        <a href="{{ route('employee.dashboard') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <span class='bx bx-category'></span>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                dashboard
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('employee.attendance') ? 'active-page' : '' }}">
                        <a href="{{ route('employee.attendance') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-time-five'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                            Attendance
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('employee.leaves') ? 'active-page' : '' }}">
                        <a href="{{ route('employee.leaves') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-calendar-minus'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                            Leaves
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('employee.holiday') ? 'active-page' : '' }}">
                        <a href="{{ route('employee.holiday') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-calendar'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                            Holidays
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item {{ url()->current() == route('employee.profile.show') ? 'active-page' : '' }}">
                        <a href="{{ route('employee.profile.show') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-user-account'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                            My Profile
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



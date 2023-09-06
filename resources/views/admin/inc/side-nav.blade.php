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
                    <li class="mx-sidenav__menu-item active-page">
                        <a href="{{ route('admin.dashboard') }}" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <span class='bx bx-category'></span>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                dashboard
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
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
                                        user list
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="mx-sidenav__menu-item">
                        <a href="profile.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-user-account'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                profile
                            </span>
                        </a>
                    </li>

                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-folder-open'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                project
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="create-project.html" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <span class='bx bx-pulse'></span>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        create project
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="project-list.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <span class='bx bx-pulse'></span>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        project list
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-message-detail'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                message
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="chat.html" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-message-dots'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        chat
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="group-chat.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bxs-message-dots'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        group chat
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="inbox.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-mail-send'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        inbox
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-detail'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                form
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="form.html" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-news'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        form
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="form-validation.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-task'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        form validation
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="price-table.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-receipt'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                price table
                            </span>
                        </a>
                    </li>
                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-library'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                UI elements
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="button.html" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-mobile-alt bx-rotate-90'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        button
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="dropdown.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-upload bx-rotate-180'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        dropdown
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="table.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-table bx-rotate-180'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        table
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="alert.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bxs-error'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        alert
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="popover.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-copy'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        popover
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="tooltip.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        tooltip
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="timeline.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-slider-alt bx-rotate-90'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        timeline
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="pagination.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-collection'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        pagination
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="symbol.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        symbol
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="overlay.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-layer'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        overlay
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="callout.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        callout
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="ribbon.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-tag-alt'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        ribbon
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sidenav__menu-item mx-sidenav__has-sub">
                        <a href="#" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-doughnut-chart'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                chart
                            </span>
                        </a>
                        <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                            <li class="mx-sidenav__sub-item">
                                <a href="chart.html" class="mx-sidenav__sub-link">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-bar-chart-square'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        chart 1
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sidenav__sub-item">
                                <a href="chart-2.html" class="mx-sidenav__sub-link ">
                                    <span class="mx-sidenav__sub-icon t-mr-15">
                                        <i class='bx bx-line-chart'></i>
                                    </span>
                                    <span class="mx-sidenav__sub-text text-capitalize">
                                        chart 2
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="data-table.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bxs-grid'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                data table
                            </span>
                        </a>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="data-search.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-category'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                data search
                            </span>
                        </a>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="faq.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-message-error'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                FAQ
                            </span>
                        </a>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="mega-option.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-spreadsheet'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                mega option
                            </span>
                        </a>
                    </li>
                    <li class="mx-sidenav__menu-item">
                        <a href="sticky-note.html" class="mx-sidenav__menu-link">
                            <span class="mx-sidenav__menu-icon t-mr-15">
                                <i class='bx bx-sticker'></i>
                            </span>
                            <span class="mx-sidenav__menu-text text-capitalize">
                                sticky note
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
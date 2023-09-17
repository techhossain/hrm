<div class="primary-nav t-bg-primary">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="primary-nav-list--right-wrapper">
                    <ul class="t-list primary-nav-list primary-nav-list--right">
                        <li class="primary-nav-list__item border-bottom-0 d-none d-lg-block t-line-1 ">
                            <a href="#" class="t-link mx-sidenav-toggle">
                                <span class="mx-sidenav-toggle__icon"></span>
                            </a>
                        </li>
                        <li class="primary-nav-list__item border-bottom-0 d-none d-lg-block t-line-1">
                            <form action="#" class="t-pl-15 t-pr-15 t-pt-15 t-pb-15">
                                <div class="mx-search-form">
                                    <div class="mx-search-form__icon">
                                        <i class='bx bx-search'></i>
                                    </div>
                                    <input type="text" class="mx-search-form__input" placeholder="Search...">
                                </div>
                            </form>
                        </li>

                        <li class="primary-nav-list__item border-bottom-0"></li>
                        <li class="primary-nav-list__item border-bottom-0"></li>
                        <li class="primary-nav-list__item border-bottom-0 d-none d-lg-block"></li>
                        <li class="primary-nav-list__item border-bottom-0">
                            <div class="dropdown">
                                <a href="#" aria-expanded="false" data-toggle="dropdown" class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-user mx-user--sm">
                                            <img src="{{ $media_url }}" alt="max" class="img-fluid w-100" />
                                        </span>
                                        <span class="d-none d-lg-inline-block t-ml-8">
                                        {{ ( auth()->user()->name ) ? auth()->user()->name : 'Harun Mozi' }}
                                            <span class="t-ml-5 d-inline-block xsm-text" data-feather="chevron-down"></span>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="t-list mx-author-menu">
                                        <li class="mx-author-menu__list">
                                            <a href="#" class="mx-author-menu__link text-capitalize sm-text">
                                                <span class="text-capitalize fw-bold d-block t-pt-5">
                                                    {{ (auth()->user()->name)?auth()->user()->name : 'Harun Mozi' }}
                                                </span>
                                                <span class="text-capitalize xsm-text d-block mt-1">
                                                    admin
                                                </span>
                                            </a>
                                            <hr class="mx-hr bg-light m-0">
                                        </li>
                                        <li class="mx-author-menu__list">
                                            <a href="{{ route('employee.profile.show') }}" class="mx-author-menu__link text-capitalize">
                                                <div class="d-flex align-items-center">
                                                    <span class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                        <i class='bx bx-user-circle'></i>
                                                    </span>
                                                    <span class="d-inline-block t-line-1 sm-text">
                                                        profile
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mx-author-menu__list">
                                            <a href="#" class="mx-author-menu__link text-capitalize">
                                                <div class="d-flex align-items-center">
                                                    <span class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                        <i class='bx bx-cog'></i>
                                                    </span>
                                                    <span class="d-inline-block t-line-1 sm-text">
                                                        settings
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mx-author-menu__list">
                                            <a href="#" class="mx-author-menu__link text-capitalize">
                                                <div class="d-flex align-items-center">
                                                    <span class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                        <i class='bx bx-help-circle'></i>
                                                    </span>
                                                    <span class="d-inline-block t-line-1 sm-text">
                                                        help
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mx-author-menu__list">
                                            <a href="#" class="mx-author-menu__link text-capitalize">
                                                <div class="d-flex align-items-center">
                                                    <span class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                        <i class='bx bx-log-out-circle'></i>
                                                    </span>

                                                    <form action="{{ route('user.logout') }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-link text-light text-decoration-none" type="submit">
                                                            <span class="d-inline-block t-line-1 sm-text">Logout</span>
                                                        </button>
                                                    </form>


                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
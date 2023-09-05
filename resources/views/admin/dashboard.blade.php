@extends('admin.template.master')

@section('content')

    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="row g-3">
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-1"></div>
                            <div class="mx-box mx-box--round mx-box--sm mx-box--light-success rounded-circle mx-chart-box__icon mx-chart-box_price-up">
                                <span class="d-inline-block text-uppercase">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center t-mt-30">
                                <div class="mx-box mx-box--round mx-box--lg mx-box--light-success t-mr-15">
                                    <span class="d-inline-block text-uppercase xxlg-text">
                                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="d-block">
                                    <span class="d-block sm-text text-uppercase t-heading-font fw-bold">
                                        total earning
                                    </span>
                                    <h3 class="mb-0 mt-0">490</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-2"></div>
                            <div class="mx-box mx-box--round mx-box--sm mx-box--light-warning rounded-circle mx-chart-box__icon mx-chart-box_price-down">
                                <span class="d-inline-block text-uppercase">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center t-mt-30">
                                <div class="mx-box mx-box--round mx-box--lg mx-box--light-warning t-mr-15">
                                    <span class="d-inline-block text-uppercase xxlg-text">
                                        <i class="fa fa-bolt" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="d-block">
                                    <span class="d-block sm-text text-uppercase t-heading-font fw-bold">
                                        trending
                                    </span>
                                    <h3 class="mb-0 mt-0">300k</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-3"></div>
                            <div class="mx-box mx-box--round mx-box--sm mx-box--light-secondary rounded-circle mx-chart-box__icon mx-chart-box_price-up">
                                <span class="d-inline-block text-uppercase">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center t-mt-30">
                                <div class="mx-box mx-box--round mx-box--lg mx-box--light-secondary t-mr-15">
                                    <span class="d-inline-block text-uppercase xxlg-text">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="d-block">
                                    <span class="d-block sm-text text-uppercase t-heading-font fw-bold">
                                        New Users
                                    </span>
                                    <h3 class="mb-0 mt-0">20k</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-4"></div>
                            <div class="mx-box mx-box--round mx-box--sm mx-box--light-danger rounded-circle mx-chart-box__icon mx-chart-box_price-down">
                                <span class="d-inline-block text-uppercase">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center t-mt-30">
                                <div class="mx-box mx-box--round mx-box--lg mx-box--light-danger t-mr-15">
                                    <span class="d-inline-block text-uppercase xxlg-text">
                                        <i class="fa fa-shield" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="d-block">
                                    <span class="d-block sm-text text-uppercase t-heading-font fw-bold">
                                        threat protection
                                    </span>
                                    <h3 class="mb-0 mt-0">540</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-8 col-xxl-5">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-5"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-8 col-xxl-4">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="mx-chart-box">
                            <div id="chart-6"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100 p-4 d-flex">
                        <div class="mx-kanban-card align-self-center">
                            <div class="mx-kanban-card__header d-flex">
                                <div class="mx-box mx-box--round mx-box--md mx-box--light-primary t-mr-8">
                                    <span class="d-inline-block text-uppercase lg-text">
                                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="mx-kanban-card__header-content">
                                    <span class="d-block xsm-text text-capitalize">react
                                        dev</span>
                                    <span class="d-block text-capitalize fw-bold lg-text">New
                                        lesson is available</span>
                                </div>
                                <div class="mx-kanban-card__header-action">
                                    <div class="dropdown ">
                                        <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item sm-text" href="#">Action</a>
                                            <a class="dropdown-item sm-text" href="#">Another
                                                action</a>
                                            <a class="dropdown-item sm-text" href="#">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-kanban-card__body py-4">
                                <h4 class="mt-0">
                                    Why react Development
                                    Best Choose you life?
                                </h4>
                                <ul class="t-list d-flex align-items-center flex-wrap">
                                    <li class="t-list__item">
                                        <span class="t-text-gamma">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                        <span class="xsm-text">
                                            9 feb, 2020
                                        </span>
                                    </li>
                                    <li class="t-list__item">
                                        <span class="t-text-lambda">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="xsm-text">
                                            1day 30mins
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-kanban-card__footer">
                                <ul class="t-list avatars__group avatars__group--md">
                                    <li>
                                        <a href="#" class="t-link">
                                            <div class="avatars avatars--circle avatars--sm-plus">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="t-link">
                                            <div class="avatars avatars--circle avatars--sm-plus">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="t-link">
                                            <div class="avatars avatars--circle avatars--sm-plus">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="t-link">
                                            <div class="avatars avatars--circle avatars--sm-plus">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="t-link">
                                            <div class="avatars avatars--circle avatars--sm-plus">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                                <div class="avatars__add-member">
                                                    <i class="las la-ellipsis-h"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-9">
                    <div class="cards t-bg-white t-shadow h-100 p-4">
                        <div class="table-responsive mx-table">
                            <table class=" t-mb-15 table table-hover table-borderless t-text-dark--light-15 sm-text">
                                <thead>
                                    <tr>
                                        <th scope="col">Agent</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Agent Name</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="t-mt-15">
                                    <tr>
                                        <td>
                                            <div class="messages__msg justify-content-center t-width-max">
                                                <div class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                    <div class="messages__avatar-replacer text-uppercase">
                                                        as
                                                    </div>
                                                </div>
                                                <div class="messages__content messages__content--unseen">
                                                    <div class="messages__title">
                                                        <span class="messages__author text-capitalize">
                                                            Asaduzzaman
                                                            sarker
                                                        </span>
                                                    </div>
                                                    <div class="messages__content-body">
                                                        <span class="messages__preview">
                                                            Manager
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Bangladesh</td>
                                        <td>Dhaka</td>
                                        <td>122, Tongi Gazipur</td>
                                        <td>
                                            <button type="button" class="btn btn-transparent btn-success xsm-text">Success</button>
                                        </td>
                                        <td class="text-center text-capitalize text-primary font-weight-bold xsm-text">
                                            retail</td>
                                        <td>
                                            <div class="dropdown ">
                                                <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item sm-text" href="#">Action</a>
                                                    <a class="dropdown-item sm-text" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item sm-text" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="messages__msg justify-content-center t-width-max">
                                                <div class="messages__avatar messages__avatar-empty t-bg-gamma">
                                                    <div class="messages__avatar-replacer text-uppercase">
                                                        as
                                                    </div>
                                                </div>
                                                <div class="messages__content messages__content--unseen">
                                                    <div class="messages__title">
                                                        <span class="messages__author text-capitalize">
                                                            Asaduzzaman
                                                            sarker
                                                        </span>
                                                    </div>
                                                    <div class="messages__content-body">
                                                        <span class="messages__preview">
                                                            Co-Founder
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Malaysia</td>
                                        <td>Kuala Lumpur</td>
                                        <td>122, Tongi Gazipur</td>
                                        <td>
                                            <button type="button" class="btn btn-transparent btn-success xsm-text">Success</button>
                                        </td>
                                        <td class="text-center text-capitalize text-secondary font-weight-bold xsm-text">
                                            retail</td>
                                        <td>
                                            <div class="dropdown ">
                                                <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item sm-text" href="#">Action</a>
                                                    <a class="dropdown-item sm-text" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item sm-text" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="messages__msg justify-content-center t-width-max">
                                                <div class="messages__avatar messages__avatar-empty t-bg-delta">
                                                    <div class="messages__avatar-replacer text-uppercase">
                                                        as
                                                    </div>
                                                </div>
                                                <div class="messages__content messages__content--unseen">
                                                    <div class="messages__title">
                                                        <span class="messages__author text-capitalize">
                                                            Asaduzzaman
                                                            sarker
                                                        </span>
                                                    </div>
                                                    <div class="messages__content-body">
                                                        <span class="messages__preview">
                                                            CEO
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Bangladesh</td>
                                        <td>Gazipur</td>
                                        <td>122, Tongi Gazipur</td>
                                        <td>
                                            <button type="button" class="btn btn-transparent btn-warning xsm-text text-capitalize">warning</button>
                                        </td>
                                        <td class="text-center text-capitalize text-success font-weight-bold xsm-text">
                                            retail</td>
                                        <td>
                                            <div class="dropdown ">
                                                <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item sm-text" href="#">Action</a>
                                                    <a class="dropdown-item sm-text" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item sm-text" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="messages__msg justify-content-center t-width-max">
                                                <div class="messages__avatar messages__avatar-empty t-bg-epsilon">
                                                    <div class="messages__avatar-replacer text-uppercase">
                                                        as
                                                    </div>
                                                </div>
                                                <div class="messages__content messages__content--unseen">
                                                    <div class="messages__title">
                                                        <span class="messages__author text-capitalize">
                                                            Asaduzzaman
                                                            sarker
                                                        </span>
                                                    </div>
                                                    <div class="messages__content-body">
                                                        <span class="messages__preview">
                                                            Manager
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Bangladesh</td>
                                        <td>Dhaka</td>
                                        <td>122, Tongi Gazipur</td>
                                        <td>
                                            <button type="button" class="btn btn-transparent btn-danger xsm-text text-capitalize">danger</button>
                                        </td>
                                        <td class="text-center text-capitalize text-danger font-weight-bold xsm-text">
                                            retail</td>
                                        <td>
                                            <div class="dropdown ">
                                                <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item sm-text" href="#">Action</a>
                                                    <a class="dropdown-item sm-text" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item sm-text" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="messages__msg justify-content-center t-width-max">
                                                <div class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                    <div class="messages__avatar-replacer text-uppercase">
                                                        as
                                                    </div>
                                                </div>
                                                <div class="messages__content messages__content--unseen">
                                                    <div class="messages__title">
                                                        <span class="messages__author text-capitalize">
                                                            Asaduzzaman
                                                            sarker
                                                        </span>
                                                    </div>
                                                    <div class="messages__content-body">
                                                        <span class="messages__preview">
                                                            Hi,
                                                            I'm
                                                            Asaduzzaman,
                                                            are
                                                            u
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Malaysia</td>
                                        <td>Kuala Lumpur</td>
                                        <td>122, Tongi Gazipur</td>
                                        <td>
                                            <button type="button" class="btn btn-transparent btn-primary xsm-text text-capitalize">danger</button>
                                        </td>
                                        <td class="text-center text-capitalize text-warning font-weight-bold xsm-text">
                                            retail</td>
                                        <td>
                                            <div class="dropdown ">
                                                <button class="btn t-bg-clear t-text-dark--light-40" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item sm-text" href="#">Action</a>
                                                    <a class="dropdown-item sm-text" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item sm-text" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row t-mt-15 align-items-center">
                            <div class="col-md-7 t-mb-15 mb-md-0">
                                <ul class="t-list d-flex">
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                                            <i class="las la-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text active">
                                            2
                                        </a>
                                    </li>
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                                            3
                                        </a>
                                    </li>
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                                            4
                                        </a>
                                    </li>
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                                            5
                                        </a>
                                    </li>
                                    <li class="t-list__item">
                                        <a href="#" class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                                            <i class="las la-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <ul class="t-list d-flex justify-content-md-end align-items-center">
                                    <li class="t-list__item nice-select--up">
                                        <select class="mx-select">
                                            <option data-display="10">10</option>
                                            <option value="1">10 - 20</option>
                                            <option value="2">20 - 30</option>
                                            <option value="3">30 - 40</option>
                                            <option value="4">40 - 50</option>
                                        </select>
                                    </li>
                                    <li class="t-list__item">
                                        <span class="d-inline-block text-capitalize sm-text">
                                            showing 10 -20 of 300
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-xxl-3">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="cards__header t-pt-30 t-pb-15 t-pl-15 t-pr-15 border-bottom d-flex align-items-center justify-content-between">
                            <h6 class="mt-0 mb-0 text-capitalize">
                                new users
                            </h6>
                            <ul class="t-list d-flex flex-wrap align-items-center">
                                <li class="t-list__item">
                                    <a href="#" class="t-link t-link--primary font-weight-md text-capitalize sm-text active">today</a>
                                </li>
                                <li class="t-list__item">
                                    <a href="#" class="t-link t-link--primary font-weight-md text-capitalize sm-text">week</a>
                                </li>
                                <li class="t-list__item">
                                    <a href="#" class="t-link t-link--primary font-weight-md text-capitalize sm-text">month</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cards__body t-pt-30 t-pl-15 t-pr-15 t-pb-30">
                            <ul class="t-list">
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="messages__msg justify-content-center t-width-max">
                                            <div class="avatars avatars--rounded avatars--sm-plus t-mr-8">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                            <div class="messages__content messages__content--unseen">
                                                <div class="messages__title">
                                                    <span class="messages__author text-capitalize">
                                                        Christian bell
                                                    </span>
                                                </div>
                                                <div class="messages__content-body">
                                                    <span class="messages__preview font-weight-normal text-capitalize t-line-1">
                                                        visual designer
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="badges badges-rounded badges-sm badges-secondary-half  text-capitalize">
                                            follow
                                        </a>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="messages__msg justify-content-center t-width-max">
                                            <div class="avatars avatars--rounded avatars--sm-plus t-mr-8">
                                                <img src="{{ asset('assets/img/user-1.jpg') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                            <div class="messages__content messages__content--unseen">
                                                <div class="messages__title">
                                                    <span class="messages__author text-capitalize">
                                                        jack rayan
                                                    </span>
                                                </div>
                                                <div class="messages__content-body">
                                                    <span class="messages__preview font-weight-normal text-capitalize t-line-1">
                                                        react developer
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="badges badges-rounded badges-sm badges-secondary-half  text-capitalize">
                                            follow
                                        </a>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="messages__msg justify-content-center t-width-max">
                                            <div class="avatars avatars--rounded avatars--sm-plus t-mr-8">
                                                <img src="{{ asset('assets/img/user.jpg') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                            <div class="messages__content messages__content--unseen">
                                                <div class="messages__title">
                                                    <span class="messages__author text-capitalize">
                                                        jhon doe
                                                    </span>
                                                </div>
                                                <div class="messages__content-body">
                                                    <span class="messages__preview font-weight-normal text-capitalize t-line-1">
                                                        node js
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="badges badges-rounded badges-sm badges-secondary-half  text-capitalize">
                                            follow
                                        </a>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="messages__msg justify-content-center t-width-max">
                                            <div class="avatars avatars--rounded avatars--sm-plus t-mr-8">
                                                <img src="{{ asset('assets/img/overlay-1.jpg') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                            <div class="messages__content messages__content--unseen">
                                                <div class="messages__title">
                                                    <span class="messages__author text-capitalize">
                                                        sher khan
                                                    </span>
                                                </div>
                                                <div class="messages__content-body">
                                                    <span class="messages__preview font-weight-normal text-capitalize t-line-1">
                                                        gatsby
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="badges badges-rounded badges-sm badges-secondary-half  text-capitalize">
                                            follow
                                        </a>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="messages__msg justify-content-center t-width-max">
                                            <div class="avatars avatars--rounded avatars--sm-plus t-mr-8">
                                                <img src="{{ asset('assets/img/overlay-3.jpg') }}" alt="max" class="img-fulid w-100">
                                            </div>
                                            <div class="messages__content messages__content--unseen">
                                                <div class="messages__title">
                                                    <span class="messages__author text-capitalize">
                                                        sher khan
                                                    </span>
                                                </div>
                                                <div class="messages__content-body">
                                                    <span class="messages__preview font-weight-normal text-capitalize t-line-1">
                                                        gatsby
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="badges badges-rounded badges-sm badges-secondary-half  text-capitalize">
                                            follow
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
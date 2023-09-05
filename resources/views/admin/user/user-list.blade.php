@extends('admin.template.master')

@section('content')
<main class="main-content t-mt-15 t-mb-15">
  <div class="container-fluid px-3">
    <div class="row g-3">

      @foreach ($users as $user)

      <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="id-card t-shadow t-bg-white text-center">
          <span class="id-card__number id-card__number--{{ ($user->id % 4 == 0) ? 'warning' : ( ($user->id % 4 == 1) ? 'success' : ( ($user->id % 4 == 2) ? 'primary' : 'secondary')) }}">{{ $user->id }}</span>
          <div class="avatars avatars--circle avatars--xl mx-auto">
            <img src="{{ $user->profile_picture }}" alt="max" class="img-fulid w-100">
            <div class="avatars__status">
              <i class="las la-check"></i>
            </div>
          </div>
          <div class="id-card__body t-mt-30">
            <h5 class="id-card__title text-capitalize mt-0 mb-0">{{ $user->name }}</h5>
            <span class="id-card__sub-title text-capitalize xsm-text">
              product manager
            </span>
            <p class="sm-text t-mt-15">
              Lorem ipsum dolor sit amet consectetur adipisicing elit adipisicing
            </p>
            <ul class="t-list">
              <li class="t-mb-5">
                <span class="id-card__icon t-mr-8">
                  <i class="fa fa-envelope-o"></i>
                </span>
                <span class="d-inlin-block sm-text">{{ $user->email }}</span>
              </li>
              <li class="t-mb-5">
                <span class="id-card__icon t-mr-8">
                  <i class="fa fa-map-marker"></i>
                </span>
                <span class="d-inlin-block sm-text text-capitalize">south road, miami</span>
              </li>
            </ul>
            <button type="button" class="btn btn-transparent sm-text font-weight-bold w-100 text-capitalize t-mt-15 btn-{{ ($user->id % 4 == 0) ? 'warning' : ( ($user->id % 4 == 1) ? 'success' : ( ($user->id % 4 == 2) ? 'primary' : 'secondary')) }}">write message</button>
          </div>
        </div>
      </div>

      @endforeach


    </div>
    <div class="t-bg-white cards t-shadow mt-3 mb-3 py-2">
      <div class="container-fluid px-3">
        <div class="row">
          <div class="col-12">
            <div class="row g-3 align-items-center">
              <div class="col-md-7">
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
      </div>

    </div>

  </div>
</main>
@endsection
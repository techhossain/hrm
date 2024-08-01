@extends('admin.template.master')

@section('content')

<main class="main-content t-mt-15 t-mb-15">
  <div class="container-fluid px-3">
    <div class="row g-3">

      <div class="col-lg-12 col-xxl-12">
        <div class="cards t-bg-white t-shadow h-100">
          <div class="cards__header t-pt-30 t-pb-30 px-3 px-md-4 border-bottom">
            <h6 class="mt-0 mb-0 text-capitalize">
              department
            </h6>
          </div>
          <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">
            <p class="sm-text">
              department
            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="t-bg-white cards t-shadow mt-3 mb-3 py-2">
      <div class="container-fluid px-3">
        <div class="row">
          <div class="col-12">
            <div class="row g-3 align-items-center">
              <div class="col-md-7">
                <ul class="t-list d-flex">
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                      <i class="las la-angle-double-left"></i>
                    </a>
                  </li>
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text active">
                      2
                    </a>
                  </li>
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                      3
                    </a>
                  </li>
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                      4
                    </a>
                  </li>
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                      5
                    </a>
                  </li>
                  <li class="t-list__item">
                    <a href="#"
                      class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">
                      <i class="las la-angle-double-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-5">
                <ul class="t-list d-flex justify-content-md-end align-items-center">
                  <li class="t-list__item nice-select--up">
                    <select class="mx-select" style="display: none;">
                      <option data-display="10">10</option>
                      <option value="1">10 - 20</option>
                      <option value="2">20 - 30</option>
                      <option value="3">30 - 40</option>
                      <option value="4">40 - 50</option>
                    </select>
                    <div class="nice-select mx-select" tabindex="0"><span class="current">10</span>
                      <ul class="list">
                        <li data-value="10" data-display="10" class="option selected">10</li>
                        <li data-value="1" class="option">10 - 20</li>
                        <li data-value="2" class="option">20 - 30</li>
                        <li data-value="3" class="option">30 - 40</li>
                        <li data-value="4" class="option">40 - 50</li>
                      </ul>
                    </div>
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
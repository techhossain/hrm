@include('admin.inc.header')

  <!-- Preloader  -->
    @include('admin.component.preloader')
  <!-- Preloader End -->

  <!-- Side Nav / Display Only Small Screen  -->

    @include('admin.inc.side-nav-mobile')

  <!-- Side Nav / Display Only Small Screen  End-->

  <!-- Page Wrapper -->
  <div class="container-fluid p-0">
    <div class="row g-0">

      <!--SideNav / Display Only Small Screen  -->
      @include('admin.inc.top-nav-mobile')
      <!--SideNav/ Display Only Small Screen End -->


      <!--SideNav / Display Only Large Screen  -->
      @include('admin.inc.side-nav')
      <!--SideNav / Display Only Large Screen End -->


      <div class="col-9 col-xxl-10 flex-grow-1">
        <div class="container-fluid px-2 px-xxl-0">
          <div class="row g-2 g-xxl-0">
            <div class="col-12">
              <div class="mx-body">

                <header class="header sticky-top d-none d-xl-block">

                  @include('admin.inc.top-menu')

                  <!-- Pagination -->
                  @include('admin.component.pagination')


                </header>

                <div class="mx-body__content rounded-0" data-simplebar>

                  @yield('content')

                  <!-- Footer credit for Admin Panel -->
                  @include('admin.inc.footer-credit')

                </div>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Wrapper End -->

@include('admin.inc.footer')
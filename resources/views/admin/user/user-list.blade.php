@extends('admin.template.master')

@section('content')
<main class="main-content t-mt-15 t-mb-15">
  <div class="container-fluid px-3">

    <!-- Search Bar -->
    <div class="t-bg-white cards rounded-0 t-shadow mt-3 mb-3 py-2">
      <div class="container-fluid px-3">
        <div class="row">
          <div class="col-6 py-3">
            <form action="" method="GET">
              <div class="input-group">
                <input name="user" value="{{ isset($_GET['user'])? $_GET['user'] : '' }}" type="text" class="form-control" id="search" placeholder="Search Here">
              </div>
            </form>
          </div>
          <div>
              @if(session()->has('message'))

                  {{ session('message') }}

              @endif
          </div>
        </div>
      </div>
    </div>

    <div class="row g-3">

      <!-- Search alert display  -->
      @if( $users->count() <= 0 ) <div>
        <p class="alert alert-warning mx-1">No user found</p>
    </div>

    @endif

    @foreach ($users as $user)

    <div class="col-md-6 col-lg-4 col-xxl-3">
      <div class="id-card t-shadow t-bg-white text-center">
        <span class="id-card__number id-card__number--{{ ($user->id % 4 == 0) ? 'warning' : ( ($user->id % 4 == 1) ? 'success' : ( ($user->id % 4 == 2) ? 'primary' : 'secondary')) }}">{{ $user->id }}</span>
        <div class="avatars avatars--circle avatars--xl mx-auto">
          <img src="{{ isset($user->profile_picture) ? $user->profile_picture : 'https://source.unsplash.com/random/300x300'}}" alt="max" class="img-fulid w-100">
          <div class="avatars__status">
            <i class="las la-check"></i>
          </div>
        </div>
        <div class="id-card__body t-mt-30">
          <h5 class="id-card__title text-capitalize mt-0 mb-0">{{ $user->name }}</h5>
          <span class="id-card__sub-title text-capitalize xsm-text">
            {{ isset($user->employee->designation->designation_name) ? $user->employee->designation->designation_name : "Employee" }}
          </span>
          <ul class="t-list">
            <li class="t-mb-5">
              <span class="id-card__icon t-mr-8">
                <i class="fa fa-envelope-o"></i>
              </span>
              <span class="d-inlin-block sm-text">{{ $user->email }}</span>
            </li>
            <li class="t-mb-5">
              <span class="id-card__icon t-mr-8">
                <i class="fa fa-phone"></i>
              </span>
              <span class="d-inlin-block sm-text text-capitalize">{{ isset($user->employee->mobile) ? $user->employee->mobile : "01678136325" }}</span>
            </li>
          </ul>
          <button type="button" class="btn btn-transparent sm-text font-weight-bold w-100 text-capitalize t-mt-15 btn-{{ ($user->id % 4 == 0) ? 'warning' : ( ($user->id % 4 == 1) ? 'success' : ( ($user->id % 4 == 2) ? 'primary' : 'secondary')) }}">write message</button>
        </div>
      </div>
    </div>

    @endforeach
  </div>

  <!-- Pagination -->
  @if( $pagination == 1)

  <div class="t-bg-white cards rounded-0 t-shadow mt-3 mb-3 py-2">
    <div class="container-fluid px-3">
      <div class="row">
        <div class="col-12 pt-3">
          @if( $pagination == 1 && $users->hasPages() )
          {{ $users->links('vendor.pagination.bootstrap-5-modified') }}
          @endif
        </div>
      </div>
    </div>
  </div>

  @endif

  </div>
</main>


<div class="modal" tabindex="-1" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <p>
          @if(session()->has('message'))

              {{ session('message') }}

          @endif
        </p>
      </div>
    </div>
  </div>
</div>



@endsection
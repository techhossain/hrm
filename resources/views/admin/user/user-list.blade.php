@extends('admin.template.master')

@section('content')
<main class="main-content t-mt-15 t-mb-15">
  <div class="container-fluid px-3">

    <div class="col">
      @if(session()->has('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
      @endif
    </div>

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
        <span class="id-card__number id-card__number--{{ ($user->id % 2 == 0) ? 'primary' : 'success' }}">
          {{ $user->id }}
        </span>

        <div class="avatars avatars--circle avatars--xl mx-auto">

        @if($user->getMedia('dp')->reverse()->first())
            {{ $user->getMedia('dp')->reverse()->first() }}
        @else
          <img src="https://source.unsplash.com/random/300x300" alt="{{ $user->name }}" class="img-fulid w-100">
        @endif


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

          <!-- Actions for Edit and Delete -->
          <div class="action py-2">

            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-transparent sm-text font-weight-bold text-capitalize t-mt-15 btn-primary" id="edit-{{$user->id}}">Edit</a>

            <a href="#" class="btn btn-sm btn-transparent sm-text font-weight-bold text-capitalize t-mt-15 btn-danger delete-btn" id="delete-{{$user->id}}">Delete</a>

            <!-- Modal for deletion user -->
            <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" id="delete-form">
              @csrf
              <div id="modal-js-example" class="modal">
                <div class="modal-background" style="background-color: rgba(10,10,10,0.5);"></div>
                <div class="modal-content">
                  <div class="box p-5">
                    <p class="my-3">Do you want to delete - <b>{{$user->name}} ?</b></p>
                    <button type="submit" class="btn btn-sm btn-danger delete-yes">Yes</button>
                    <a href="#" class="btn btn-sm btn-primary delete-no">No</a>
                  </div>
                </div>
              </div>
            </form>

          </div>

          <button type="button" class="btn btn-transparent sm-text font-weight-bold w-100 text-capitalize t-mt-15 btn-{{ ($user->id % 2 == 0) ? 'primary' : 'success' }}">write message</button>
        </div>
      </div>
    </div>

    @endforeach
  </div>

  <!-- Pagination -->
  @if( $pagination == 1 && $users->hasPages())
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



@endsection
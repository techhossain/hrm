@extends('admin.template.master')

@section('content')

<main class="main-content t-mt-15 t-mb-15">

  <div class="container-fluid px-3">

    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
    @endif


    @if( $errors->any() )

    @foreach ( $errors->all() as $error)
    <div class="alert alert-warning">{{ $error }}</div>
    @endforeach

    @endif


  <div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('admin.user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="{{$user->name}}">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="{{$user->email}}">
              </div>

              <div class="mb-3">
                <label for="upload-image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="upload-image" name="photo">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********">
              </div>

              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="********">
              </div>

              <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      <img class="img-fluid rounded mx-auto d-block img-thumbnail" src="{{ $media_url }}" alt="{{$user->name}}">
    </div>
  </div>

  </div>
</main>

@endsection
@extends('admin.template.master')

@section('content')

<main class="main-content t-mt-15 t-mb-15">
  <div class="container-fluid px-3">
    <h4>Create new user</h4>

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


    <div class="card">
      <div class="card-body">
        <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name') }}" type="text" class="form-control" id="name" placeholder="Full Name" name="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="********">
          </div>

          <div class="mb-3">
            <label for="upload-image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="upload-image" name="photo">
          </div>

          <div class="mb-4">
            <label for="is_admin" class="form-label">Select User Role</label>
            <select class="form-select form-select-sm" id="is_admin" name="is_admin">
              <option value="Administrator">Administrator</option>
              <option value="Employee" selected>Employee</option>
            </select>

          </div>

          <button type="submit" class="btn btn-primary">Create User</button>
        </form>


      </div>
    </div>

  </div>
</main>

@endsection
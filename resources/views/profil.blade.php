@extends('layouts.sidebar')

@section('main')
<div class="cards">
  <div class="cards_head">
    <h1>Edit Profile</h1>
    <span class="divider"></span>
  </div>
    <form action="{{ route('update-profile-admin') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card_body">

        <div style="width: 500px;">
          @if ($user->profile_picture != null)
          <img src="{{ asset($user->profile_picture) }}" class="img-preview rounded-circle mb-3 col-sm-3" >
          @else
              <img class="img-preview rounded-circle mb-3 col-sm-1">
          @endif
        </div>

        <div class="mb-3">
          <label for="profile_picture" class="form-label">Profile Picture</label>
          <input type="hidden" name="old_profile" value="{{ $user->profile_picture}}">
          <input class="form-control mb-3 @error('profile_picture') is-invalid @enderror" type="file" id="profile_picture"
              name="profile_picture" onchange="previewImage()">
          @error('profile_picture')
              <p class="text-danger">
                  {{ $message }}
              </p>
          @enderror
        </div>
          
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="name@example.com" name="name" value="{{ old('name', $user->name) }}">
            <label for="name">Name</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="name@example.com" name="username" value="{{ old('username', $user->username) }}">
            <label for="name">Username</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
            <label for="password">New Password</label>
            @error('password')
              <div id="password" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation">
          <label for="password_confirmation">Confirm New Password</label>
        </div>
        <button type="submit" class="btn btn-primary">Change Profile</button>
      </form>
  </div>
@endsection

@section('js')
  <script>
    function previewImage() {
        const image = document.querySelector('#profile_picture');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
  </script>
@endsection

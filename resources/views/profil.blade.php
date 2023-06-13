@extends('layouts.sidebar')

@section('main')
  <div class="cards">
    <div class="cards_head">
        <h1>Edit Profil</h1>
        <span class="divider"></span>
    </div>
    <form action="{{ route('update-profile-admin') }}" method="POST">
      @csrf

      <div class="card_body">
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="name@example.com" name="name" value="{{ old('name', $user->name) }}">
              <label for="name">Nama Lengkap</label>
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
      </div>

      <button type="submit" class="btn btn-primary">Ubah Profil</button>
    </form>
  </div>
@endsection

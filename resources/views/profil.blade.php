@extends('layouts.sidebar')

@section('main')
  <div class="cards">
    <div class="cards_head">
        <h1>Edit Profil Admin</h1>
        <span class="divider"></span>
    </div>
    <div class="card_body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Username</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Confirm Password</label>
        </div>

        <div class="form-floating mb-5 pt-1 pb-1">
          <input type="file" class="form-control">
          <label for="floatingPassword">Upload Foto</label>
        </div>
    </div>
    <button type="button" type="submit" class="btn btn-primary">Ubah Profil</button>
  </div>
@endsection
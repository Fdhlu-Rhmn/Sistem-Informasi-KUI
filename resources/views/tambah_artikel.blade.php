@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Artikel</h1>
                <span class="divider"></span>
            </div>
            <div class="card_body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Judul Artikel</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Deskripsi</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Author</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Konten artikel</label>
                  </div>
            </div>
            <button type="button" type="submit" class="btn btn-primary">Tambah Artikel</button>
        </div>
@endsection
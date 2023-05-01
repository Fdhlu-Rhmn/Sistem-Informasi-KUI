@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Edit Data Pengguna</h1>
                <span class="divider divider--width"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('inbound.update', $inbound->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $inbound-> Nama }}">
                    </div>
                </div>
                <div class="col mb-3">
                  <input type="text" name="Institusi_Asal" class="form-control" placeholder="Institusi Asal" value="{{ $inbound-> Institusi_Asal }}">
                </div>
                <div class="col mb-3">
                  <input type="text" name="Fakultas" class="form-control" placeholder="Fakultas" value="{{ $inbound-> Fakultas }}">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Prodi" class="form-control" placeholder="Prodi" value="{{ $inbound-> Prodi }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal" value="{{ $inbound-> Negara_Asal }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Nama_Program" class="form-control" placeholder="Nama Program" value="{{ $inbound-> Nama_Program }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi_Program" class="form-control" placeholder="Durasi Program" value="{{ $inbound-> Durasi_Program }}">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $inbound-> Email }}">
                  </div>
                  <div class="col">
                    <input type="text" name="PIC" class="form-control" placeholder="PIC" value="{{ $inbound-> PIC }}">
                  </div>
                </div>
              </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
@endsection
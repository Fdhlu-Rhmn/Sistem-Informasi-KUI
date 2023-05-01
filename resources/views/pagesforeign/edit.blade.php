@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Edit Data Pengguna</h1>
                <span class="divider divider--width"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa-> Nama }}">
                    </div>
                </div>
                <div class="col mb-3">
                  <input type="text" name="NIM" class="form-control" placeholder="No.Pokok" value="{{ $mahasiswa-> NIM }}">
                </div>
                <div class="col mb-3">
                  <input type="text" name="Fakultas_Prodi" class="form-control" placeholder="Fakultas/Prodi" value="{{ $mahasiswa-> Fakultas_Prodi }}">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="IPK" class="form-control" placeholder="IPK" value="{{ $mahasiswa-> IPK }}">
                    </div>
                    <div class="col">
                      <input type="text" name="BIPA" class="form-control" placeholder="BIPA" value="{{ $mahasiswa-> BIPA }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Jenjang" class="form-control" placeholder="Jenjang" value="{{ $mahasiswa-> Jenjang }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Status" class="form-control" placeholder="Status" value="{{ $mahasiswa-> Status }}">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Angkatan" class="form-control" placeholder="Angkatan" value="{{ $mahasiswa-> Angkatan }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Gender" class="form-control" placeholder="Jenis Kelamin" value="{{ $mahasiswa-> Gender }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Alamat di Makassar" value="{{ $mahasiswa-> Alamat }}">
                </div>
                  <div class="col">
                      <input type="text" name="No_Hp" class="form-control" placeholder="No handphone" value="{{ $mahasiswa-> No_Hp }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal" value="{{ $mahasiswa-> Negara_Asal }}">
                  </div>
              </div>

              <div class="col mb-3">
                <input type="text" name="Pendamping_Akademik" class="form-control" placeholder="Pendamping Akademik" value="{{ $mahasiswa-> Pendamping_Akademik }}">
              </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
@endsection
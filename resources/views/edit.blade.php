@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Edit Data Pengguna</h1>
                <span class="divider divider--width"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('mahasiswa.update') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col mb-3">
                  <input type="text" name="NIM" class="form-control" placeholder="No.Pokok">
                </div>
                <div class="col mb-3">
                  <input type="text" name="Fakultas_Prodi" class="form-control" placeholder="Fakultas/Prodi">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="IPK" class="form-control" placeholder="IPK">
                    </div>
                    <div class="col">
                      <input type="text" name="BIPA" class="form-control" placeholder="BIPA">
                    </div>
                    <div class="col">
                      <input type="text" name="Jenjang" class="form-control" placeholder="Jenjang">
                    </div>
                    <div class="col">
                      <input type="text" name="Status" class="form-control" placeholder="Status">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Angkatan" class="form-control" placeholder="Angkatan">
                  </div>
                  <div class="col">
                    <input type="text" name="Gender" class="form-control" placeholder="Jenis Kelamin">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Alamat di Makassar">
                </div>
                  <div class="col">
                      <input type="text" name="No_Hp" class="form-control" placeholder="No handphone">
                  </div>
                  <div class="col">
                    <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal">
                  </div>
              </div>

              <div class="col mb-3">
                <input type="text" name="Pendamping_Akademik" class="form-control" placeholder="Pendamping Akademik">
              </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
@endsection
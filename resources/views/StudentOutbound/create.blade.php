@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
              <h1>Students Exchange Outbound</h1>
              <span class=" dividers dividers--width-studentsOutbound"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('outbound.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Negara_Tujuan" class="form-control" placeholder="Destination Country">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Tujuan" class="form-control" placeholder="Destination Institution">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama_Program" class="form-control" placeholder="Program Name">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi" class="form-control" placeholder="Program Duration">
                    </div>
                    <div class="col">
                      <input type="text" name="Prodi" class="form-control" placeholder="Departement">
                    </div>
                    <div class="col">
                      <input type="text" name="Fakultas" class="form-control" placeholder="Fakulty">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Email" class="form-control" placeholder="Email">
                  </div>
                </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
              {{-- <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="text" name="Nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Nama Mahasiswa</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" name="NIM" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">No. Pokok</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" name="Fakultas/Prodi" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Fakultas/Prodi</label>
                </div>

                <div class="row g-2 mb-3">
                  <div class="col-md">
                    <div class="form-floating">
                      <input type="text"  name="IPK" class="form-control" id="floatingInputGrid" placeholder="Masukkan IPK">
                      <label for="floatingInputGrid">IPK</label>
                    </div>
                  </div> --}}

                  {{-- <div class="col-md">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>-</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>
                      </select>
                      <label for="floatingSelectGrid">BIPA</label>
                    </div>
                  </div>

                  <div class="col-md">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>-</option>
                        <option value="1">2018</option>
                        <option value="2">2019</option>
                        <option value="3">2020</option>
                        <option value="4">2021</option>
                        <option value="5">2022</option>
                        <option value="5">2023</option>
                      </select>
                      <label for="floatingSelectGrid">Angkatan</label>
                    </div>
                  </div>

                  <div class="col-md">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>-</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                      </select>
                      <label for="floatingSelectGrid">Jenis Kelamin</label>
                    </div>
                  </div>
                </div> --}}

                {{-- <div class="row g-2 mb-3">
                  <div class="col-md">
                    <div class="form-floating">
                      <input type="text" name="Negara_Asal" class="form-control" id="floatingInputGrid" placeholder="Negara Asal">
                      <label for="floatingInputGrid">Negara Asal</label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-floating">
                      <input type="text" name="Alamat" class="form-control" id="floatingInputGrid" placeholder="Alamat di Makassar">
                      <label for="floatingInputGrid">Alamat di Makassar</label>
                    </div>
                  </div>
                </div>

                <div class="row g-2">
                  <div class="col-md">
                    <div class="form-floating">
                      <input type="text" name="No_Hp" class="form-control" id="floatingInputGrid" placeholder="No. Telpon">
                      <label for="floatingInputGrid">No Telpon</label>
                    </div>
                  </div>
                    <div class="col-md mb-3">
                      <div class="form-floating">
                        <input type="text" name="Pendamping_Akademik" class="form-control" id="floatingInputGrid" placeholder="Alamat di Makassar">
                        <label for="floatingInputGrid">Dosen Pendamping</label>
                      </div>
                    </div>
                </div>
                <button type="button" type="submit" class="btn btn-primary">Add</button>

              </form>
            </div> --}}
        </div>

@endsection

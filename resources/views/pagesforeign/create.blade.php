@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Data Pengguna</h1>
                <span class="divider"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('mahasiswa.store') }}" method="POST">
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
                      <div class="dropdown border rounded">
                        <select class="text-secondary form-control btn  dropdown-toggle btn-s" name="BIPA">
                          <option hidden> BIPA</option>
                          <option>A</option>
                          <option>B</option>
                          <option>C</option>
                          <option>D</option>
                          <option>E</option>
                        </select>
                      </div>
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
                      {{-- <input type="text" name="Angkatan" class="form-control" placeholder="Angkatan"> --}}
                      <div class="dropdown border rounded">
                        <select class="text-secondary form-control btn  dropdown-toggle btn-s" name="Angkatan">
                          <option hidden> Angkatan</option>
                          <option>2018</option>
                          <option>2019</option>
                          <option>2020</option>
                          <option>2021</option>
                          <option>2022</option>
                          <option>2023</option>
                        </select>
                      </div>
                  </div>
                  <div class="col">
                    {{-- <input type="text" name="Gender" class="form-control" placeholder="Jenis Kelamin"> --}}
                    <div class="dropdown border rounded">
                      <select class="text-secondary form-control btn  dropdown-toggle btn-s" name="Gender">
                        <option hidden> Gender</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
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
                <button type="button" type="submit" class="btn btn-primary">Tambah Mahasiswa</button>

              </form>
            </div> --}}
        </div>

@endsection
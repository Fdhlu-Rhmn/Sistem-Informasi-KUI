@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
                <h1>Edit Data Pengguna</h1>
                <span class="divider divider--width"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('pending.store', $pendings->id)}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $pendings-> Nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="NIM" class="form-control" placeholder="No.Pokok" value="{{ $pendings-> NIM }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Fakultas_Prodi" class="form-control" placeholder="Fakultas/Prodi" value="{{ $pendings-> Fakultas_Prodi }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="IPK" class="form-control" placeholder="IPK" value="{{ $pendings-> IPK }}">
                    </div>
                    <div class="col">
                        <input type="text" name="BIPA" class="form-control" placeholder="BIPA" value="{{ $pendings-> BIPA }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Jenjang" class="form-control" placeholder="Jenjang" value="{{ $pendings-> Jenjang }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Status" class="form-control" placeholder="Status" value="{{ $pendings-> Status }}">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="dropdown border rounded">
                      <select class="form-control btn  dropdown-toggle btn-s" name="Angkatan">
                        <option hidden> {{ $pendings-> Angkatan }}</option>
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
                    <div class="dropdown border rounded">
                      <select class="form-control btn  dropdown-toggle btn-s" name="Gender">
                        <option hidden>{{ $pendings-> Gender }}</option>
                        <option>L</option>
                        <option>P</option>
                      </select>
                    </div>                  
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Alamat di Makassar" value="{{ $pendings-> Alamat }}">
                </div>
                  <div class="col">
                      <input type="text" name="No_Hp" class="form-control" placeholder="No handphone" value="{{ $pendings-> No_Hp }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal" value="{{ $pendings-> Negara_Asal }}">
                  </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Pendamping_Akademik" class="form-control" placeholder="Pendamping Akademik" value="{{ $pendings-> Pendamping_Akademik }}">
                </div>
              </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
@endsection
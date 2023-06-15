@extends('layouts.sidebar')

@section('main')
        <div class="cards">
          <div class="cards_head">
            <h1>Foreign Students</h1>
            <span class="divider"></span>
          </div>
            <div class="card_body">

              <form action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Name" value="{{ $mahasiswa-> Nama }}">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="NIM" class="form-control" placeholder="NIM" value="{{ $mahasiswa-> NIM }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas_Prodi" class="form-control" placeholder="Fakulty/Departement" value="{{ $mahasiswa-> Fakultas_Prodi }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="IPK" class="form-control" placeholder="IPK" value="{{ $mahasiswa-> IPK }}">
                  </div>
                  <div class="col">
                    <input type="text" name="BIPA" class="form-control" placeholder="BIPA" value="{{ $mahasiswa-> BIPA }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Jenjang" class="form-control" placeholder="Level" value="{{ $mahasiswa-> Jenjang }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Status" class="form-control" placeholder="Status" value="{{ $mahasiswa-> Status }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <div class="dropdown border rounded">
                      <select class="form-control btn  dropdown-toggle btn-s" name="Wave">
                        <option hidden> {{ $mahasiswa-> Angkatan }}</option>
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
                        <option hidden>{{ $mahasiswa-> Gender }}</option>
                        <option>L</option>
                        <option>P</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Address" value="{{ $mahasiswa-> Alamat }}">
                </div>

                  <div class="col">
                      <input type="text" name="No_Hp" class="form-control" placeholder="Phone Number" value="{{ $mahasiswa-> No_Hp }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Negara_Asal" class="form-control" placeholder="Origin Country" value="{{ $mahasiswa-> Negara_Asal }}">
                  </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Pendamping_Akademik" class="form-control" placeholder="Academic Assistant" value="{{ $mahasiswa-> Pendamping_Akademik }}">
                </div>
              </div>

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
@endsection

@extends('layouts.sidebar')



@section('main')
        <div class="cards">
            <div class="cards_head">
              <h1>Foreign Students</h1>
              <span class="divider"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="NIM" class="form-control" placeholder="NIM">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas_Prodi" class="form-control" placeholder="Fakulty/Departement">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="IPK" class="form-control" placeholder="IPK">
                    </div>
                    <div class="col">
                      <input type="text" name="BIPA" class="form-control" placeholder="BIPA">
                    </div>
                    <div class="col">
                      <input type="text" name="Jenjang" class="form-control" placeholder="Level">
                    </div>
                    <div class="col">
                      <input type="text" name="Status" class="form-control" placeholder="Status">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <div class="dropdown border rounded">
                        <select class="text-secondary form-control btn  dropdown-toggle btn-s" name="Angkatan">
                          <option hidden> Wave</option>
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
                      <select class="text-secondary form-control btn  dropdown-toggle btn-s" name="Gender">
                        <option hidden> Gender</option>
                        <option>Female</option>
                        <option>Male</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Address">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="No_Hp" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="col">
                    <input type="text" name="Negara_Asal" class="form-control" placeholder="Origin Country">
                  </div>
                </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Pendamping_Akademik" class="form-control" placeholder="Academic Assitant">
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

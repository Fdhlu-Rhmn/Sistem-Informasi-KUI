@extends('layouts.sidebar')



@section('main')
        <div class="cards">
          <div class="cards_head">
            <h1>Students Exchange Inbound</h1>
            <span class="dividers dividers--width-students"></span>
        </div>
            <div class="card_body">

              <form action="{{ route('inbound.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Asal" class="form-control" placeholder="Origin Institution">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas" class="form-control" placeholder="Fakulty">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Prodi" class="form-control" placeholder="Departement">
                    </div>
                    <div class="col">
                      <input type="text" name="Negara_Asal" class="form-control" placeholder="Origin Country">
                    </div>
                    <div class="col">
                      <input type="text" name="Nama_Program" class="form-control" placeholder="Program Name">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi_Program" class="form-control" placeholder="Program Duration">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Email" class="form-control" placeholder="Email">
                  </div>
                  <div class="col">
                    <input type="text" name="PIC" class="form-control" placeholder="PIC">
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

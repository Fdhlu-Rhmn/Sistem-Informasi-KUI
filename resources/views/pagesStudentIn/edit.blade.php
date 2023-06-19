@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
              <h1>Students Exchange Inbound</h1>
              <span class="dividers dividers--width-students"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('inbound.update', $inbound->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Name" value="{{ $inbound-> Nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Asal" class="form-control" placeholder="Origin Institution" value="{{ $inbound-> Institusi_Asal }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas" class="form-control" placeholder="Fakulty" value="{{ $inbound-> Fakultas }}">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Prodi" class="form-control" placeholder="Departement" value="{{ $inbound-> Prodi }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Negara_Asal" class="form-control" placeholder="Origin Country" value="{{ $inbound-> Negara_Asal }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Nama_Program" class="form-control" placeholder="Program Name" value="{{ $inbound-> Nama_Program }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi_Program" class="form-control" placeholder="Program Duration" value="{{ $inbound-> Durasi_Program }}">
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

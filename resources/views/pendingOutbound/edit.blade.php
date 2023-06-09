@extends('layouts.sidebar')

@section('main')
        <div class="cards">
          <div class="cards_head">
            <h1>Students Exchange Outbound</h1>
            <span class=" dividers dividers--width-studentsOutbound"></span>
          </div>
          <div class="card_body">

            <form action="{{ route('pendingOutbound.store', $formoutbound->id)}}" method="POST">
              @csrf
              <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $formoutbound-> Nama }}">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Tujuan" class="form-control" placeholder="Durasi" value="{{ $formoutbound-> Institusi_Tujuan }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Prodi" class="form-control" placeholder="Prodi" value="{{ $formoutbound-> Prodi }}">
                  </div>
                  <div class="col">
                    <input type="text" name="Fakultas" class="form-control" placeholder="Fakultas" value="{{ $formoutbound-> Fakultas }}">
                  </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Durasi" class="form-control" placeholder="Durasi" value="{{ $formoutbound-> Durasi }}">
                </div>
                <div class="col">
                  <input type="text" name="Nama_Program" class="form-control" placeholder="Nama Program" value="{{ $formoutbound-> Nama_Program }}">
                </div>
    
                <div class="col">
                  <input type="text" name="Negara_Tujuan" class="form-control" placeholder="Negara Tujuan" value="{{ $formoutbound-> Negara_Tujuan }}">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $formoutbound-> Email }}">                
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
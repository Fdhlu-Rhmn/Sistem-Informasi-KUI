@extends('layouts.sidebar')

@section('main')
        <div class="cards">
          <div class="cards_head">
            <h1>Students Exchange Outbound</h1>
            <span class=" dividers dividers--width-studentsOutbound"></span>
          </div>
          <div class="card_body">

            <form action="{{ route('outbound.update', $outbound->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $outbound-> Nama }}">
                  </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Institusi_Tujuan" class="form-control" placeholder="Durasi" value="{{ $outbound-> Institusi_Tujuan }}">
                </div>
                <div class="col">
                    <input type="text" name="Prodi" class="form-control" placeholder="Prodi" value="{{ $outbound-> Prodi }}">
                </div>
                <div class="col">
                  <input type="text" name="Fakultas" class="form-control" placeholder="Fakultas" value="{{ $outbound-> Fakultas }}">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Durasi" class="form-control" placeholder="Durasi" value="{{ $outbound-> Durasi }}">
                </div>
                
                <div class="col">
                  <input type="text" name="Nama_Program" class="form-control" placeholder="Nama Program" value="{{ $outbound-> Nama_Program }}">
                </div>

                <div class="col">
                  <input type="text" name="Negara_Tujuan" class="form-control" placeholder="Negara Tujuan" value="{{ $outbound-> Negara_Tujuan }}">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $outbound-> Email }}">                
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
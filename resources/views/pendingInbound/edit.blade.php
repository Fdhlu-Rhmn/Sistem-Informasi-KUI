@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
              <h1>Students Exchange Inbound</h1>
              <span class="dividers dividers--width-students"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('pendingInbound.store', $forminbound->id)}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $forminbound-> Nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Asal" class="form-control" placeholder="Institusi Asal" value="{{ $forminbound-> Institusi_Asal }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas" class="form-control" placeholder="Fakultas" value="{{ $forminbound-> Fakultas }}">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Prodi" class="form-control" placeholder="Prodi" value="{{ $forminbound-> Prodi }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal" value="{{ $forminbound-> Negara_Asal }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Nama_Program" class="form-control" placeholder="Nama Program" value="{{ $forminbound-> Nama_Program }}">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi_Program" class="form-control" placeholder="Durasi Program" value="{{ $forminbound-> Durasi_Program }}">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                      <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $forminbound-> Email }}">
                  </div>
                  <div class="col">
                    <input type="text" name="PIC" class="form-control" placeholder="PIC" value="{{ $forminbound-> PIC }}">
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
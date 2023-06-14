@extends('layouts.sidebar')

@section('main')
        <div class="cards">
            <div class="cards_head">
              <h1>Students Exchange Outbound</h1>
              <span class=" dividers dividers--width-studentsOutbound"></span>
            </div>
            <div class="card_body">

              <form action="{{ route('formoutbound') }}" method="POST">
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
                    <input type="text" name="Institusi_Tujuan" class="form-control" placeholder="Destination institution">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama_Program" class="form-control" placeholder="Program Name">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi" class="form-control" placeholder="Program duration">
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

                <div class="row mb-3">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            @if (Session::has('success'))
            <div class="alert alert-success py-3" role="alert">
              {{Session::get('success')}}
            </div>
            @endif
        </div>

@endsection
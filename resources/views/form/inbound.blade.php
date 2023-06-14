@extends('layouts.sidebar')

 

@section('main')
        <div class="cards">
          <div class="cards_head">
            <h1>Students Exchange Inbound</h1>
            <span class="dividers dividers--width-students"></span>
        </div>
            <div class="card_body">

              <form action="{{ route('forminbound') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Institusi_Asal" class="form-control" placeholder="Institusi Asal">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" name="Fakultas" class="form-control" placeholder="Fakultas">
                  </div>
                </div>  
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="Prodi" class="form-control" placeholder="Prodi">
                    </div>
                    <div class="col">
                      <input type="text" name="Negara_Asal" class="form-control" placeholder="Negara Asal">
                    </div>
                    <div class="col">
                      <input type="text" name="Nama_Program" class="form-control" placeholder="Nama Program">
                    </div>
                    <div class="col">
                      <input type="text" name="Durasi_Program" class="form-control" placeholder="Durasi Program">
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
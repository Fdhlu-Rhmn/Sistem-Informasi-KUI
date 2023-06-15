@extends('layouts.sidebar')

@section('main')
    <div class="cards">
        <div class="cards_head">
            <h1>Lecturer Outbounds</h1>
            <span class="dividers dividers--width-lecturerOutbound"></span>
        </div>
        <div class="card_body">

            <form action="{{ route('dosen-outbound.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="institusi_tujuan" class="form-control" placeholder="Destination Institution">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="negara_tujuan" class="form-control" placeholder="Destination Country">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakulty">
                    </div>
                    <div class="col">
                        <input type="text" name="prodi" class="form-control" placeholder="Departement">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="program" class="form-control" placeholder="Program Name">
                    </div>
                    <div class="col">
                        <input type="text" name="durasi_program" class="form-control" placeholder="Program Duration">
                    </div>
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

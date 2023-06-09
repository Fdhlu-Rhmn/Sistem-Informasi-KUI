@extends('layouts.sidebar')

@section('main')
    <div class="cards">
        <div class="cards_head">
            <h1>Lecturer Inbounds</h1>
            <span class="dividers dividers--width-lecturerInbound"></span>
        </div>
        <div class="card_body">

            <form action="{{ route('dosen-inbound.update', $inbound->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="{{ $inbound->name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col ">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ $inbound->email }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="institusi_asal" class="form-control" placeholder="Origin Institution"
                            value="{{ $inbound->institusi_asal }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="negara_asal" class="form-control" placeholder="Origin Country"
                            value="{{ $inbound->negara_asal }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakulty"
                            value="{{ $inbound->fakultas }}">
                    </div>
                    <div class="col">
                        <input type="text" name="prodi" class="form-control" placeholder="Departement"
                            value="{{ $inbound->prodi }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="program" class="form-control" placeholder="Program Name"
                            value="{{ $inbound->program }}">
                    </div>
                    <div class="col">
                        <input type="text" name="durasi_program" class="form-control" placeholder="Program Duration"
                            value="{{ $inbound->durasi_program }}">
                    </div>
                    <div class="col">
                        <input type="text" name="PIC" class="form-control" placeholder="PIC"
                            value="{{ $inbound->PIC }}">
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

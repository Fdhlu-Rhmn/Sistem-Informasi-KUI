@extends('layouts.sidebar')

@section('main')
    <div class="cards">
        <div class="cards_head">
            <h1>Edit Inbound</h1>
            <span class="divider"></span>
        </div>
        <div class="card_body">

            <form action="{{ route('dosen-outbound.update', $outbound->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="{{ $outbound->name }}">
                    </div>
                </div>
                <div class="col mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="{{ $outbound->email }}">
                </div>
                <div class="col mb-3">
                    <input type="text" name="institusi_tujuan" class="form-control" placeholder="Destination Institution"
                        value="{{ $outbound->institusi_tujuan }}">
                </div>
                <div class="col mb-3">
                    <input type="text" name="negara_tujuan" class="form-control" placeholder="Destination Country"
                        value="{{ $outbound->negara_tujuan }}">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakulty"
                            value="{{ $outbound->fakultas }}">
                    </div>
                    <div class="col">
                        <input type="text" name="prodi" class="form-control" placeholder="Departement"
                            value="{{ $outbound->prodi }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="program" class="form-control" placeholder="Program Name"
                            value="{{ $outbound->program }}">
                    </div>
                    <div class="col">
                        <input type="text" name="durasi_program" class="form-control" placeholder="Program Duration"
                            value="{{ $outbound->durasi_program }}">
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

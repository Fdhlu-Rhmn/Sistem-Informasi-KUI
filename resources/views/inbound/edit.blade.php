@extends('layouts.sidebar')

@section('main')
    <div class="cards">
        <div class="cards_head">
            <h1>Edit Inbound</h1>
            <span class="divider"></span>
        </div>
        <div class="card_body">

            <form action="{{ route('dosen-inbound.update', $inbound->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Nama"
                            value="{{ $inbound->name }}">
                    </div>
                </div>
                <div class="col mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="{{ $inbound->email }}">
                </div>
                <div class="col mb-3">
                    <input type="text" name="institusi_asal" class="form-control" placeholder="Institusi Asal"
                        value="{{ $inbound->institusi_asal }}">
                </div>
                <div class="col mb-3">
                    <input type="text" name="negara_asal" class="form-control" placeholder="Negara Asal"
                        value="{{ $inbound->negara_asal }}">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakultas Kegiatan di UNHAS"
                            value="{{ $inbound->fakultas }}">
                    </div>
                    <div class="col">
                        <input type="text" name="prodi" class="form-control" placeholder="Prodi Kegiatan di UNHAS"
                            value="{{ $inbound->prodi }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="program" class="form-control" placeholder="Nama Program yang dijalani"
                            value="{{ $inbound->program }}">
                    </div>
                    <div class="col">
                        <input type="text" name="durasi_program" class="form-control" placeholder="Durasi Program"
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

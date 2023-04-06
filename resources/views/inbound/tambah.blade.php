@extends('layouts.sidebar')

@section('main')
    <div class="cards">
        <div class="cards_head">
            <h1>Tambah Inbound</h1>
            <span class="divider"></span>
        </div>
        <div class="card_body">

            <form action="{{ route('dosen-inbound.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col mb-3">
                    <input type="text" name="institusi_asal" class="form-control" placeholder="Institusi Asal">
                </div>
                <div class="col mb-3">
                    <input type="text" name="negara_asal" class="form-control" placeholder="Negara Asal">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakultas Kegiatan di UNHAS">
                    </div>
                    <div class="col">
                        <input type="text" name="prodi" class="form-control" placeholder="Prodi Kegiatan di UNHAS">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="program" class="form-control" placeholder="Nama Program yang dijalani">
                    </div>
                    <div class="col">
                        <input type="text" name="durasi_program" class="form-control" placeholder="Durasi Program">
                    </div>
                    <div class="col">
                        <input type="text" name="PIC" class="form-control" placeholder="PIC">
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

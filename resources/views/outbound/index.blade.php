@extends('layouts.sidebar')

@section('css')
    <link rel="stylesheet" href="style/mahasiswa.css">
@endsection

@section('main')

    <div class="cards">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="col">
            <div class="cards_head">
                <h1>Outbound Dosen</h1>
                <span class="divider divider--color"></span>
            </div>
            <div class="cards_body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Institusi Tujuan</th>
                                <th scope="col">Negara Tujuan</th>
                                <th scope="col">Fakultas</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Program</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @if ($outbounds->count() > 0)
                            @foreach ($outbounds as $outbound)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $outbound->name }}</td>
                                    <td>{{ $outbound->email }}</td>
                                    <td>{{ $outbound->institusi_tujuan }}</td>
                                    <td>{{ $outbound->negara_tujuan }}</td>
                                    <td>{{ $outbound->fakultas }}</td>
                                    <td>{{ $outbound->prodi }}</td>
                                    <td>{{ $outbound->program }}</td>
                                    <td>{{ $outbound->durasi_program }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('dosen-outbound.edit', $outbound->id) }}" type="button"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('dosen-outbound.destroy', $outbound->id) }}"
                                                method="POST" type="button" class="btn btn-danger p-0"
                                                onsubmit="return confirm('Delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="14">Tidak ada data inbound</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="{{ route('dosen-outbound.create') }}" role="button">Tambah Outbound
                    Dosen</a>
            </div>
        </div>
    </div>
@endsection

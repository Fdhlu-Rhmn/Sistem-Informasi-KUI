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
                <h1>Lecturer Inbounds</h1>
                <span class="dividers dividers--width-lecturerInbound"></span>
            </div>

            <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/dosen-inbound" method="GET" >
                  <div class="input-group d-flex">
                      <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for...">
                      <button class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
              </div>
            <form action="{{ route('importInbound') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                      <label for="file">File:</label>
                      <input id="file" type="file" name="file" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary">Import Inbound</button>
                  <a class="btn btn-success px-2" href="{{ route('exportInbound') }}">Export Inbound</a>
                </div>
            </form>

            <div class="cards_body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Institusi Asal</th>
                                <th scope="col">Negara Asal</th>
                                <th scope="col">Fakultas Kegiatan</th>
                                <th scope="col">Prodi Kegiatan</th>
                                <th scope="col">Nama Program</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">PIC</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($inbounds->count() > 0)
                                @foreach ($inbounds as $index => $inbound)
                                    <tr>
                                        <td class="text-center">{{$index + $inbounds -> firstItem()}}</td>
                                        <td>{{ $inbound->name }}</td>
                                        <td>{{ $inbound->email }}</td>
                                        <td>{{ $inbound->institusi_asal }}</td>
                                        <td>{{ $inbound->negara_asal }}</td>
                                        <td>{{ $inbound->fakultas }}</td>
                                        <td>{{ $inbound->prodi }}</td>
                                        <td>{{ $inbound->program }}</td>
                                        <td>{{ $inbound->durasi_program }}</td>
                                        <td>{{ $inbound->PIC }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('dosen-inbound.edit', $inbound->id) }}" type="button"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('dosen-inbound.destroy', $inbound->id) }}"
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
                <a class="btn btn-primary" href="{{ route('dosen-inbound.create') }}" role="button">Tambah Inbound Dosen</a>
                {{-- {{$inbounds->links()}} --}}
                {!! $inbounds->appends(Request::except('page'))->render()!!}
            </div>
        </div>
    </div>
@endsection

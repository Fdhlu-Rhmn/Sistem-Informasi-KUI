@extends('layouts.sidebar')

@section('css')
    <link rel="stylesheet" href="/style/mahasiswa.css">
@endsection

@section('main')

    <div class="cards">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        
        @if (Session::has('delete'))
        <div class="alert alert-danger" role="alert">
          {{Session::get('delete')}}
        </div>
        @endif

        <div class="col">
            <div class="cards_head">
                <h1>Lecturer Outbounds</h1>
                <span class="dividers dividers--width-lecturerOutbound"></span>
            </div>

            <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/dosen-outbound" method="GET" >
                  <div class="input-group d-flex">
                      <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for...">
                      <button class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
            </div>
            <form action="{{ route('importOutbound') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                      <label for="file">File:</label>
                      <input id="file" type="file" name="file" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary">Import Outbound</button>
                  <a class="btn btn-success px-2" href="{{ route('exportOutbound') }}">Export Outbound</a>
                </div>
            </form>

            <div class="cards_body">
                <div class="table-responsive">
                    <table id="example" class="projek__table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Institusi Tujuan</th>
                                <th scope="col">Fakultas</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Negara Tujuan</th>
                                <th scope="col">Nama Program</th>
                                <th scope="col">Durasi Program</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($outbounds->count() > 0)
                                @foreach ($outbounds as $index => $outbound)
                                    <tr>
                                        <td class="text-center">{{ $index + $outbounds -> firstItem()}}</td>
                                        <td>{{ $outbound->name }}</td>
                                        <td>{{ $outbound->institusi_tujuan }}</td>
                                        <td>{{ $outbound->fakultas }}</td>
                                        <td>{{ $outbound->prodi }}</td>
                                        <td>{{ $outbound->negara_tujuan }}</td>
                                        <td>{{ $outbound->program }}</td>
                                        <td>{{ $outbound->durasi_program }}</td>
                                        <td>{{ $outbound->email }}</td>
                                        <td>
                                            {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('dosen-outbound.edit', $outbound->id) }}" type="button"
                                                    class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('dosen-outbound.destroy', $outbound->id) }}"
                                                    method="POST" type="button" class="btn btn-danger p-0"
                                                    onsubmit="return confirm('Delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                                            </div> --}}

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a  href="{{ route('dosen-inbound.edit', $outbound->id) }}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$outbound->id}}" class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                                                  <div id="exampleModal-{{$outbound->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal" tabindex="-1">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title">Delete Data </h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <p>Apakah anda ingin menghapus data <br/> <span class="fw-bolder"> {{$outbound -> Nama}} </span>?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                          <form action="{{ route('mahasiswa.destroy', $outbound->id)}}" method="POST" class="btn btn-danger p-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary">Delete Data</button>
                                                          </form>             
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
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
                <a class="btn btn-primary" href="{{ route('dosen-outbound.create') }}" role="button">Tambah Outbound Dosen</a>
                {!! $outbounds->appends(Request::except('page'))->render()!!}


            </div>
        </div>
    </div>
@endsection

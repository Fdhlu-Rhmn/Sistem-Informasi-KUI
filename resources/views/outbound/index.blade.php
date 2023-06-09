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
                                <th scope="col">Name</th>
                                <th scope="col">Destination Institution</th>
                                <th scope="col">Fakulty</th>
                                <th scope="col">Departement</th>
                                <th scope="col">Destination Country</th>
                                <th scope="col">Program Name</th>
                                <th scope="col">Program Duration</th>
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
                                                <a  href="{{ route('dosen-outbound.edit', $outbound->id) }}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$outbound->id}}" class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                                                  <div id="exampleModal-{{$outbound->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal" tabindex="-1">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title">Delete Data </h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <p>Do you want to delete <br/> <span class="fw-bolder"> {{$outbound -> name}} </span>?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                          <form action="{{ route('dosen-outbound.destroy', $outbound->id)}}" method="POST" class="btn btn-danger p-0">
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
                                    <td class="text-center" colspan="14">There is no data</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="{{ route('dosen-outbound.create') }}" role="button">Add Outbound Lecturer</a>
                {!! $outbounds->appends(Request::except('page'))->render()!!}


            </div>
        </div>
    </div>
@endsection

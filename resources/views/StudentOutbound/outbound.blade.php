@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="/style/mahasiswa.css">
@endsection

@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Students Exchange Outbound</h1>
                <span class=" dividers dividers--width-studentsOutbound"></span>
            </div>
            <div class="cards_body">
              <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/outbound" method="GET" >
                  <div class="input-group d-flex">
                      <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for...">
                      <button class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
              </div>

            <form action="{{ route('importStudentOutbound') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-4">
                  <div class="custom-file text-left">
                    <label for="file">File:</label>
                    <input id="file" type="file" name="file" class="form-control">
                  </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary">Import Outbound</button>
                <a class="btn btn-success px-2" href="{{ route('exportStudentOutbound') }}">Export Outbound</a>
              </div>
          </form>

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
            @endif

            <div class="table-responsive">
              <table id="example" class="projek__table ">
                <thead class="table-primary">
                  <tr >
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
                @if($dataOutbound-> count() > 0)
                  @foreach($dataOutbound as $index => $outbound)
                  <tr>
                    <td class="text-center">{{ $index + $dataOutbound -> firstItem()}}</td>
                    <td> {{ $outbound-> Nama }}</td>
                    <td>{{ $outbound-> Institusi_Tujuan }}</td>
                    <td class="text-center">{{ $outbound-> Nama_Program }}</td>
                    <td>{{ $outbound-> Fakultas }}</td>
                    <td class="text-center">{{ $outbound-> Prodi }}</td>
                    <td class="text-center">{{ $outbound-> Negara_Tujuan }}</td>
                    <td class="text-center">{{ $outbound-> Durasi }}</td>
                    <td class="text-center">{{ $outbound-> Email }}</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a  href="{{ route('outbound.edit', $outbound->id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                      <form action="{{ route('outbound.destroy', $outbound->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>

                      </div>
                  </td>
                  </tr>
                  @endforeach
                @else
                <tr>
                  <td class ="text-center"colspan="14">There is no data</td>
                </tr>
                @endif
                </tbody>
              </table>
            </div>
            
            <div>
                  <a class="btn btn-primary" href="{{route('outbound.create')}}" role="button">Tambah Student Outbounds</a>
                  {{-- {{$dataOutbound->links()}} --}}
                  {!! $dataOutbound->appends(Request::except('page'))->render()!!}

            </div>
        </div>
 @endsection   
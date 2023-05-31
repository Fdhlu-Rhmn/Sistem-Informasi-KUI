@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="/style/mahasiswa.css">
@endsection

@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Foreign Students</h1>
                <span class="divider"></span>
                {{-- <span class="divider"></span> --}}
            </div>
            <div class="cards_body">
              <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/mahasiswa" method="GET" >
                  <div class="input-group d-flex">
                      <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for...">
                      <button class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
              </div>

            <form action="{{  route('import') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-4">
                  <div class="custom-file text-left">
                    <label for="file">File:</label>
                    <input id="file" type="file" name="file" class="form-control">
                  </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary">Import Foreign Student</button>
                <a class="btn btn-success px-2" href="{{ route('export') }}">Export Foreign Student</a>
              </div>
          </form>

            {{-- <form action="{{ route('import') }}" method="POST" name="importform"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group py-2">
              <label for="file">File:</label>
              <input id="file" type="file" name="file" class="form-control">
            </div>

            <div class="d-flex pb-3">
              <div class="form-group">
                <a class="btn btn-success">Import File</a>
                <a class="btn btn-info" href="{{ route('export') }}">Export File</a>
              </div> 
            </div>

          </form> --}}

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
            @endif
            <div class="table-responsive ">
              <table id="example" class="projek__table">
                <thead class="table-primary">
                  <tr >
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas/Prodi</th>
                    <th>IPK</th>
                    <th>BIPA</th>
                    <th>Jenjang</th>
                    <th>Status</th>
                    <th>Angkatan</th>
                    <th>J/K</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Negara Asal</th>
                    <th>Pendamping Akademik</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($posts-> count() > 0)
                    @foreach($posts as $index => $mahasiswa)
                    <tr>
                      <td >{{ $index + $posts -> firstItem() }}</td>
                      <td> {{ $mahasiswa-> Nama }}</td>
                      <td >{{ $mahasiswa-> NIM }}</td>
                      <td>{{ $mahasiswa-> Fakultas_Prodi }}</td>
                      <td >{{ $mahasiswa-> IPK }}</td>
                      <td >{{ $mahasiswa-> BIPA }}</td>
                      <td >{{ $mahasiswa-> Jenjang }}</td>
                      <td >{{ $mahasiswa-> Status }}</td>
                      <td >{{ $mahasiswa-> Angkatan }}</td>
                      <td>{{ $mahasiswa-> Gender }}</td>
                      <td>{{ $mahasiswa-> Alamat }}</td>
                      <td >{{ $mahasiswa-> No_Hp }}</td>
                      <td>{{ $mahasiswa-> Negara_Asal }}</td>
                      <td>{{ $mahasiswa-> Pendamping_Akademik }}</td>
                      <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a  href="{{ route('mahasiswa.edit', $mahasiswa->id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
            <div class="p-3">
              <a class="btn btn-primary" href="{{route('mahasiswa.create')}}" role="button">Tambah Foreign Students </a>
              {!! $posts->appends(Request::except('page'))->render()!!}
            </div>

        </div>
 @endsection   
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
                <form action="/mahasiswa" method="GET" >
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
                <button class="btn btn-primary">Import Users</button>
                <a class="btn btn-success px-2" href="{{ route('export') }}">Export Users</a>
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
              <table id="example" class="table table-striped table-hover " style="width:100%">
                <thead class="table-primary">
                  <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Fakultas/Prodi</th>
                    <th scope="col">IPK</th>
                    <th scope="col">BIPA</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">J/K</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Negara Asal</th>
                    <th scope="col">Pendamping Akademik</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  @if($posts-> count() > 0)
                    @foreach($posts as $index => $mahasiswa)
                    <tr>
                      <td class="text-center">{{ $index + $posts -> firstItem() }}</td>
                      <td> {{ $mahasiswa-> Nama }}</td>
                      <td class="text-center">{{ $mahasiswa-> NIM }}</td>
                      <td>{{ $mahasiswa-> Fakultas_Prodi }}</td>
                      <td class="text-center">{{ $mahasiswa-> IPK }}</td>
                      <td class="text-center">{{ $mahasiswa-> BIPA }}</td>
                      <td class="text-center">{{ $mahasiswa-> Jenjang }}</td>
                      <td class="text-center">{{ $mahasiswa-> Status }}</td>
                      <td class="text-center">{{ $mahasiswa-> Angkatan }}</td>
                      <td>{{ $mahasiswa-> Gender }}</td>
                      <td>{{ $mahasiswa-> Alamat }}</td>
                      <td class="text-center">{{ $mahasiswa-> No_Hp }}</td>
                      <td>{{ $mahasiswa-> Negara_Asal }}</td>
                      <td>{{ $mahasiswa-> Pendamping_Akademik }}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a  href="{{ route('mahasiswa.edit', $mahasiswa->id)}}" type="button" class="btn btn-primary">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger m-0">Delete</button>

                        </div>
                    </td>
                    </tr>
                    @endforeach
                  @else
                  <tr>
                    <td class ="text-center"colspan="14">Tidak ada data mahasiswa</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="p-3">
              <a class="btn btn-primary " href="{{route('mahasiswa.create')}}" role="button">Tambah Mahasiswa</a>
              {!! $posts->appends(Request::except('page'))->render()!!}
            </div>

        </div>
 @endsection   
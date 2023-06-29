@extends('layouts.sidebar')

@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Foreign Students</h1>
                <span class="divider"></span>
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

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
            @endif

            @if (Session::has('delete'))
            <div class="alert alert-danger" role="alert">
              {{Session::get('delete')}}
            </div>
            @endif
            <div class="table-responsive ">
              <table id="example" class="projek__table">
                <thead class="table-primary">
                  <tr >
                    <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Fakulty/Departement</th>
                            <th scope="col">IPK</th>
                            <th scope="col">BIPA</th>
                            <th scope="col">Level</th>
                            <th scope="col">Status</th>
                            <th scope="col">College Class


</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Origin Country</th>
                            <th scope="col">Academic Assistant</th>
                            <th scope="col">Action</th>
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
                          <a  href="{{ route('mahasiswa.edit', $mahasiswa-> id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                          <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$mahasiswa -> id}}" class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                            <div id="exampleModal-{{$mahasiswa -> id}}" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Delete Data </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Do you want to delete <br/> <span class="fw-bolder"> {{$mahasiswa -> Nama}} </span>?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa-> id)}}" method="POST" class="btn btn-danger p-0">
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
                        <td class ="text-center"colspan="14">There is no data</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="p-3">
              <a class="btn btn-primary" href="{{route('mahasiswa.create')}}" role="button">Add Foreign Students </a>
              {!! $posts->appends(Request::except('page'))->render()!!}
            </div>
        </div>
 @endsection

@section('js')
<link rel="script" href="/js/modal.js">
@endsection

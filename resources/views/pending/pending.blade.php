@extends('layouts.sidebar')



@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Pending Request</h1>
                <span class="divider"></span>
            </div>
            <div class="cards_body">
              <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/pending" method="GET" >
                  <div class="input-group d-flex">
                      <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for...">
                      <button class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
              </div>

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
              <table id="example" class="projek__table " style="width:100%">
                <thead class="table-primary">
                  <tr >
                    <tr >
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">NIM</th>
                      <th scope="col">Fakulty/Departement</th>
                      <th scope="col">IPK</th>
                      <th scope="col">BIPA</th>
                      <th scope="col">Level</th>
                      <th scope="col">Status</th>
                      <th scope="col">Wave</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Origin Country</th>
                      <th scope="col">Academic Assistant</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if($pendings-> count() > 0)
                    @foreach($pendings as $index => $pending)
                    <tr>
                      <td class="text-center">{{ $index + $pendings -> firstItem() }}</td>
                      <td> {{ $pending-> Nama }}</td>
                      <td class="text-center">{{ $pending-> NIM }}</td>
                      <td>{{ $pending-> Fakultas_Prodi }}</td>
                      <td class="text-center">{{ $pending-> IPK }}</td>
                      <td class="text-center">{{ $pending-> BIPA }}</td>
                      <td class="text-center">{{ $pending-> Jenjang }}</td>
                      <td class="text-center">{{ $pending-> Status }}</td>
                      <td class="text-center">{{ $pending-> Angkatan }}</td>
                      <td>{{ $pending-> Gender }}</td>
                      <td>{{ $pending-> Alamat }}</td>
                      <td class="text-center">{{ $pending-> No_Hp }}</td>
                      <td>{{ $pending-> Negara_Asal }}</td>
                      <td>{{ $pending-> Pendamping_Akademik }}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a  href="{{ route('pending.edit', $pending-> id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                          <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$pending -> id}}" class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                            <div id="exampleModal-{{$pending -> id}}" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Delete Data </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Do you want to delete <br/> <span class="fw-bolder"> {{$pending -> Nama}} </span>?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('pending.destroy', $pending-> id)}}" method="POST" class="btn btn-danger p-0">
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
              {!! $pendings->appends(Request::except('page'))->render()!!}
            </div>
        </div>

        
 @endsection   
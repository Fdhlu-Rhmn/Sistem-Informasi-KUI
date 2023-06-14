@extends('layouts.sidebar')



@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Students Exchange Inbound</h1>
                <span class="dividers dividers--width-students"></span>
            </div>
            <div class="cards_body">
              <div class="d-inline-block mb-3 navbar-search">
                <form action="/dashboard/inbound" method="GET" >
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
              <table id="example" class="projek__table ">
                <thead class="table-primary">
                  <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Institusi Asal</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Negara Asal</th>
                    <th scope="col">Nama Program</th>
                    <th scope="col">Durasi Program</th>
                    <th scope="col">Email</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($forminbound -> count() > 0)
                    @foreach($forminbound as $index => $inbound)
                    <tr>
                      <th class="text-center">{{ $index + $forminbound -> firstItem() }}</td>
                      <td> {{ $inbound-> Nama }}</td>
                      <td class="text-center">{{ $inbound-> Institusi_Asal }}</td>
                      <td>{{ $inbound-> Fakultas }}</td>
                      <td class="text-center">{{ $inbound-> Prodi }}</td>
                      <td class="text-center">{{ $inbound-> Negara_Asal }}</td>
                      <td class="text-center">{{ $inbound-> Nama_Program }}</td>
                      <td class="text-center">{{ $inbound-> Durasi_Program }}</td>
                      <td>{{ $inbound-> Email }}</td>
                      <td>{{ $inbound-> PIC }}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a  href="{{ route('pendingInbound.edit', $inbound-> id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                          <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$inbound -> id}}" class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                            <div id="exampleModal-{{$inbound -> id}}" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Delete Data </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Apakah anda ingin menghapus data <br/> <span class="fw-bolder"> {{$inbound -> Nama}} </span>?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('inbound.destroy', $inbound-> id)}}" method="POST" class="btn btn-danger p-0">
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
                  {!! $forminbound->appends(Request::except('page'))->render()!!}

            </div>
        </div>
 @endsection   
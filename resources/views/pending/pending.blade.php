@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="/style/mahasiswa.css">
@endsection

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
                        <a  href="{{ route('pending.edit', $pending->id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('pending.destroy', $pending->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger m-0"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                  @else
                  <tr>
                    <td class ="text-center"colspan="14">Tidak ada data pending</td>
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
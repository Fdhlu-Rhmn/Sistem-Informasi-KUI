@extends('layouts.sidebar')

@section('css')
{{-- <link rel="stylesheet" href="style/mahasiswa.css"> --}}
@endsection

@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Foreign Students</h1>
                <span class="divider"></span>
                {{-- <span class="divider"></span> --}}
            </div>
            <div class="cards_body">
                <form
                class="d-inline-block mb-3 navbar-search">
                <div class="input-group d-flex">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
            @endif
            <div class="table-responsive ">
              <table id="example" class="table table-striped table-hover ">
                <thead class="table-primary">
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Fakultas/Prodi</th>
                    <th scope="col">IPK</th>
                    <th scope="col">BIPA</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">J/K</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Negara Asal</th>
                    <th scope="col">Pendamping Akademik</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                @if($posts-> count() > 0)
                  @foreach($posts as $mahasiswa)
                  <tr>
                    <td class="text-center">{{ $loop-> iteration }}</td>
                    <td> {{ $mahasiswa-> Nama }}</td>
                    <td class="text-center">{{ $mahasiswa-> NIM }}</td>
                    <td>{{ $mahasiswa-> Fakultas_Prodi }}</td>
                    <td class="text-center">{{ $mahasiswa-> IPK }}</td>
                    <td class="text-center">{{ $mahasiswa-> BIPA }}</td>
                    <td class="text-center">{{ $mahasiswa-> Jenjang }}</td>
                    <td class="text-center">{{ $mahasiswa-> Status }}</td>
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
              <a class="btn btn-primary " href="{{route('tambah_data')}}" role="button">Tambah Mahasiswa</a>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link " href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>
 @endsection   
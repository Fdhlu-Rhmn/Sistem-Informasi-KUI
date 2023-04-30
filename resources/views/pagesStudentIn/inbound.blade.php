@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="style/mahasiswa.css">
@endsection

@section('main')
        <div class="card p-3">
            <div class="cards_head">
                <h1>Students Exchange Inbound</h1>
                <span class="dividers dividers--width-students"></span>
            </div>
            <div class="cards_body">
                <form
                class="d-inline-block mb-3 navbar-search ">
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
            <div class="table-responsive">
              <table id="example" class="table table-striped table-hover ">
                <thead class="table-primary">
                  <tr >
                    <th scope="col">#</th>
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
                @if($dataInbound -> count() > 0)
                  @foreach($dataInbound as $inbound)
                  <tr>
                    <td class="text-center">{{ $loop-> iteration }}</td>
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
                      <a  href="{{ route('inbound.edit', $inbound->id)}}" type="button" class="btn btn-primary">Edit</a>
                      <form action="{{ route('inbound.destroy', $inbound->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                  <a class="btn btn-primary" href="{{route('inbound.create')}}" role="button">Tambah Mahasiswa</a>
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
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>
 @endsection   
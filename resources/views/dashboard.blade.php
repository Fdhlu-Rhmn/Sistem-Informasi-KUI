@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="style/mahasiswa.css">
@endsection

@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <h1 class="h3 mb-0 text-gray-800">Welcome, {{ auth()->user()->name }}</h1>
    </div>

    @can('admin')
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Foreign Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$posts->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-success text-uppercase mb-1">
                                Students Exchange</div>
                            <div class="fs-7 mb-0 font-weight-bold ">Inbound   : {{$dataInbound->total()}}</div>
                            <div class="fs-7  mb-0 font-weight-bold ">Outbound    : {{$dataOutbound->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user-graduate fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-info text-uppercase mb-1">Lecturer
                            </div>
                            <div class="fs-7 mb-0 font-weight-bold ">Inbound   : {{$inbounds->total()}}</div>
                            <div class="fs-7  mb-0 font-weight-bold ">Outbound    : {{$outbounds->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user-tie fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Foreign Students</h1>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-center font-weight-bold text-primary text-uppercase mb-1">
                                   Angkatan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-center font-weight-bold text-primary text-uppercase mb-1">
                                   Country</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-5 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-center font-weight-bold text-primary text-uppercase mb-1">
                                    Fakultas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Foreign Students</h1>
                <span class="dividers"></span>
            </div>

            <div class="table-responsive ">
                <table id="example" class="table table-striped table-hover" >
                    <thead class="table-primary">
                        <tr class="text-xs">
                        <th scope="col">No</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @if($posts-> count() > 0)
                            @foreach($posts as $mahasiswa)
                            <tr >
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
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Students Exchange</h1>
        </div>
        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Students Exchange Inbound</h1>
                <span class="dividers dividers--width-students"></span>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover ">
                    <thead class="table-primary">
                        <tr>
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
                        </tr>
                    </thead>
                    <tbody>
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
        </div>

        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Students Exchange Outbound</h1>
                <span class="dividers dividers--width-studentsOutbound"></span>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover ">
                    <thead class="table-primary">
                        <tr >
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Negara Tujuan</th>
                        <th scope="col">Institusi Tujuan</th>
                        <th scope="col">Nama Program</th>
                        <th scope="col">Durasi Pertukaran</th>
                        <th scope="col">Email</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Fakultas</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @if($dataOutbound-> count() > 0)
                            @foreach($dataOutbound as $outbound)
                            <tr>
                            <td class="text-center">{{ $loop-> iteration }}</td>
                            <td> {{ $outbound-> Nama }}</td>
                            <td class="text-center">{{ $outbound-> Negara_Tujuan }}</td>
                            <td>{{ $outbound-> Institusi_Tujuan }}</td>
                            <td class="text-center">{{ $outbound-> Nama_Program }}</td>
                            <td class="text-center">{{ $outbound-> Durasi }}</td>
                            <td class="text-center">{{ $outbound-> Email }}</td>
                            <td class="text-center">{{ $outbound-> Prodi }}</td>
                            <td>{{ $outbound-> Fakultas }}</td>
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
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lecturer</h1>
        </div>

        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Lecturer Inbound</h1>
                <span class="dividers dividers--width-lecturerInbound"></span>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover ">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Institusi Asal</th>
                            <th scope="col">Negara Asal</th>
                            <th scope="col">Fakultas Kegiatan</th>
                            <th scope="col">Prodi Kegiatan</th>
                            <th scope="col">Nama Program</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($inbounds->count() > 0)
                            @foreach ($inbounds as $inbound)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $inbound->name }}</td>
                                    <td>{{ $inbound->email }}</td>
                                    <td>{{ $inbound->institusi_asal }}</td>
                                    <td>{{ $inbound->negara_asal }}</td>
                                    <td>{{ $inbound->fakultas }}</td>
                                    <td>{{ $inbound->prodi }}</td>
                                    <td>{{ $inbound->program }}</td>
                                    <td>{{ $inbound->durasi_program }}</td>
                                    <td>{{ $inbound->PIC }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="14">Tidak ada data inbound</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Lecturer Outbound</h1>
                <span class="dividers dividers--width-lecturerOutbound"></span>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover ">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Institusi Tujuan</th>
                            <th scope="col">Negara Tujuan</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Program</th>
                            <th scope="col">Durasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($outbounds->count() > 0)
                            @foreach ($outbounds as $outbound)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $outbound->name }}</td>
                                    <td>{{ $outbound->email }}</td>
                                    <td>{{ $outbound->institusi_tujuan }}</td>
                                    <td>{{ $outbound->negara_tujuan }}</td>
                                    <td>{{ $outbound->fakultas }}</td>
                                    <td>{{ $outbound->prodi }}</td>
                                    <td>{{ $outbound->program }}</td>
                                    <td>{{ $outbound->durasi_program }}</td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="14">Tidak ada data inbound</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>  
        @endcan
@endsection

@section('js')

@endsection
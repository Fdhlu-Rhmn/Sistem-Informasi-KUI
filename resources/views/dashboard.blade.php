@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="style/mahasiswa.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection

@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <h1 class="h3 mb-0 text-gray-800">Welcome, {{ auth()->user()->name }}</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Foreign Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$posts->count()}}</div>
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
                            <div class="fs-7 mb-0 ">Inbound   : {{$dataInbound->count()}}</div>
                            <div class="fs-7  mb-0 ">Outbound    : {{$dataOutbound->count()}}</div>
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
                            <div class="fs-7 mb-0  ">Inbound   : {{$inbounds->count()}}</div>
                            <div class="fs-7  mb-0  ">Outbound    : {{$outbounds->count()}}</div>
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
                            <div class=" font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                                <div class="fs-7 mb-0  ">Foreign Students   : {{$pendings->count()}}</div>
                                <div class="fs-7 mb-0  ">Inbound   : {{$forminbound->count()}}</div>
                                <div class="fs-7  mb-0  ">Outbound    : {{$formoutbound->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x"></i>
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
                                   Wave</div>
                            </div>
                            <div id="piechart-angkatan"></div>
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
                            <div id="piechart-country"></div>

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
                                    faculty</div>
                            </div>
                            <div id="piechart-fakultas"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @can('admin')
        <div class="card border-left-primary shadow h-100 py-2 mx-2 mb-5">
            <div class="cards_head">
                <h1>Foreign Students</h1>
                <span class="dividers"></span>
            </div>

            <div class="table-responsive ">
                <table id="example" class="projek__table" >
                    <thead class="table-primary">
                        <tr>
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
                        </tr>
                    </thead>
                    <tbody>
                        @if($postTable-> count() > 0)
                            @foreach($postTable as $mahasiswa)
                            <tr >
                            <td class="text-center">{{ $loop-> iteration }}</td>
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
                <table id="example" class="projek__table ">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Origin Institution </th>
                            <th scope="col">Fakulty</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Origin Country</th>
                            <th scope="col">Program Name</th>
                            <th scope="col">Program Duration</th>
                            <th scope="col">Email</th>
                            <th scope="col">PIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dataInboundTable -> count() > 0)
                            @foreach($dataInboundTable as $inbound)
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
                            <td class ="text-center"colspan="14">There is no data</td>
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
                <table id="example" class="projek__table ">
                    <thead class="table-primary">
                        <tr >
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Destination institution</th>
                            <th scope="col">Fakulty</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Destination country</th>
                            <th scope="col">Program name</th>
                            <th scope="col">Program duration</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dataOutboundTable-> count() > 0)
                            @foreach($dataOutboundTable as $outbound)
                            <tr>
                            <td class="text-center">{{ $loop-> iteration }}</td>
                            <td> {{ $outbound-> Nama }}</td>
                            <td>{{ $outbound-> Institusi_Tujuan }}</td>
                            <td>{{ $outbound-> Fakultas }}</td>
                            <td class="text-center">{{ $outbound-> Prodi }}</td>
                            <td class="text-center">{{ $outbound-> Negara_Tujuan }}</td>
                            <td class="text-center">{{ $outbound-> Nama_Program }}</td>
                            <td class="text-center">{{ $outbound-> Durasi }}</td>
                            <td class="text-center">{{ $outbound-> Email }}</td>
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
                <table id="example" class="projek__table ">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Origin institution</th>
                            <th scope="col">Fakulty</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Origin Country</th>
                            <th scope="col">Program name</th>
                            <th scope="col">Program duration</th>
                            <th scope="col">Email</th>
                            <th scope="col">PIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($inboundsTable->count() > 0)
                            @foreach ($inboundsTable as $inbound)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $inbound->name }}</td>
                                    <td>{{ $inbound->institusi_asal }}</td>
                                    <td>{{ $inbound->fakultas }}</td>
                                    <td>{{ $inbound->prodi }}</td>
                                    <td>{{ $inbound->negara_asal }}</td>
                                    <td>{{ $inbound->program }}</td>
                                    <td>{{ $inbound->durasi_program }}</td>
                                    <td>{{ $inbound->email }}</td>
                                    <td>{{ $inbound->PIC }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="14">There is no data</td>
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
                <table id="example" class="projek__table ">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Destination institution</th>
                            <th scope="col">Fakulty</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Destination country</th>
                            <th scope="col">Program name</th>
                            <th scope="col">Program duration</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($outboundsTable->count() > 0)
                            @foreach ($outboundsTable as $outbound)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $outbound->name }}</td>
                                    <td>{{ $outbound->institusi_tujuan }}</td>
                                    <td>{{ $outbound->fakultas }}</td>
                                    <td>{{ $outbound->prodi }}</td>
                                    <td>{{ $outbound->negara_tujuan }}</td>
                                    <td>{{ $outbound->program }}</td>
                                    <td>{{ $outbound->durasi_program }}</td>
                                    <td>{{ $outbound->email }}</td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="14">There is no data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>  
        @endcan
        </div>
@endsection

@section('js')
<script>
    let angkatan = [['Angkatan', "Value"]];
    @foreach ($angkatan as $key => $item)
        angkatan.push(["{{ $key }}", {{ $item->count() }}]);
    @endforeach

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartAngkatan);

    function drawChartAngkatan() {
            var data = google.visualization.arrayToDataTable(angkatan);
        var options = {
            curveType: 'function',
            legend: { position: 'bottom' }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart-angkatan'));
        chart.draw(data, options);
    }


    let country = [['Country', "Value"]];
    @foreach ($country as $key => $item)
        country.push(["{{ $key }}", {{ $item->count() }}]);
    @endforeach

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartCountry);
    function drawChartCountry() {
        var data = google.visualization.arrayToDataTable(country);
        var options = {
            curveType: 'function',
            legend: { position: 'bottom' }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart-country'));
        chart.draw(data, options);
    }

    let fakultas = [['Fakultas', "Value"]];
    @foreach ($fakultas as $key => $item)
        fakultas.push(["{{ $key }}", {{ $item->count() }}]);
    @endforeach

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartFakultas);
    function drawChartFakultas() {
        var data = google.visualization.arrayToDataTable(fakultas);
        var options = {
            curveType: 'function',
            legend: { position: 'bottom' }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart-fakultas'));
        chart.draw(data, options);
    }
</script>
@endsection

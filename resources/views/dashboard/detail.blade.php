@extends('layout.template')
@section('style')
    <style>
        .table td,
        .table th {
            text-align: center;
        }

        .table th {
            font-weight: bold;
            border: 2px solid black;
            text-align: center;
            background-color: gainsboro;
        }

        .table td {
            border: 1px solid black;
            text-align: center;
        }

        .sidebar-bottom {
            margin-top: auto;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 90px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 16px;
        }

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            text-align: center;
        }

        .sidebar i {
            height: 50px;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 80px;
            /* Same as the width of the sidenav */
        }

        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .btn-custom-edit {
            background-color: rgb(206, 200, 116);
            color: white;
        }

        .btn-custom-hapus {
            background-color: rgb(255, 74, 74);
            color: white;
        }

        .btn-custom-detail {
            background-color: rgb(132, 154, 132);
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="sidebar" style="background-color: white">
        <a href="/admin"><img src="https://brpamdki.org/uploads/images/img20200616085750.jpg" style="width:40px;"
                class="rounded"></a>
        <div class="sidebar-bottom">
            <a href="/logout"><i class="fa fa-fw fa-sign-out fa-lg"></i></a>
        </div>
    </div>

    <div class="main">
        <div style="padding-top: 20px">
            <h1> Detail Profil Calon Pengurus</h1>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2 style="text-align: center">{{ $cpbumd->nama }}</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Biodata Pendaftar</h5>
                <div class="my-3 p-3 bg-body rounded shadow-sm" style="font-weight: 400">
                    <p><strong>NIK:</strong> {{ $cpbumd->nik }}</p>
                    <hr>
                    <p><strong>Tanggal Lahir:</strong> {{ Carbon\Carbon::parse($cpbumd->lahir)->format('d/m/Y') }}</p>
                    <hr>
                    <p><strong>Pendidikan Terakhir:</strong> {{ $cpbumd->pendidikan }}</p>
                    <hr>
                    <p><strong>Referensi:</strong> {{ $cpbumd->referensi }}</p>
                    <hr>
                    <p><strong>Pengalaman:</strong> {{ $cpbumd->pengalaman }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <h5>Hasil Seleksi</h5>
                <div class="my-3 p-3 bg-body rounded shadow-sm" style="font-weight: 400">
                    <p><strong>Tanggal Tes Administrasi:</strong> {{ isset($cpbumd->tglseleksiadm)? Carbon\Carbon::parse($cpbumd->tglseleksiadm)->format('d/m/Y') : '(Belum Melakukan Assessment)' }}</p>
                    <hr>
                    <p><strong>Hasil Tes Administrasi:</strong> {{ $cpbumd->hasiladm }}</p>
                    <hr>
                    <p><strong>Tanggal Tes Asessment:</strong> {{ isset($cpbumd->tglseleksiassess)? Carbon\Carbon::parse($cpbumd->tglseleksiassess)->format('d/m/Y') : '(Belum Melakukan Assessment)' }}</p>
                    <hr>
                    <p><strong>Lembaga Tes Asessment:</strong> {{ $cpbumd->lokasiassess }}</p>
                    <hr>
                    <p><strong>Nilai Tes Assessment:</strong> {{ $cpbumd->nilaiassess }} (
                        @if ($cpbumd->nilaiassess == 0)
                            Belum melakukan tes
                        @elseif ($cpbumd->nilaiassess < 1000)
                            Tidak disarankan
                        @elseif ($cpbumd->nilaiassess >= 1000 && $cpbumd->nilaiassess <= 1099)
                            Disarankan dengan pengembangan
                        @elseif ($cpbumd->nilaiassess >= 1100)
                            Disarankan
                        @else
                            Angka tidak valid
                        @endif )
                    </p>
                    <hr>
                    <p><strong>Tanggal Tes Wawancara:</strong> {{ isset($cpbumd->tglseleksiwawan)? Carbon\Carbon::parse($cpbumd->tglseleksiwawan)->format('d/m/Y') : '(Belum Melakukan Assessment)' }}</p>
                    <hr>
                    <p><strong>Lokasi Tes Wawancara:</strong> {{ $cpbumd->lokasiwawan }}</p>
                    <hr>
                    <p><strong>Hasil Tes Wawancara:</strong> {{ $cpbumd->hasilwawan }} (
                        @if ($cpbumd->hasilwawan == 0)
                            Belum melakukan tes
                        @elseif ($cpbumd->hasilwawan < 70)
                            Tidak disarankan
                        @elseif ($cpbumd->hasilwawan >= 70 && $cpbumd->hasilwawan <= 74)
                            Disarankan dengan pengembangan
                        @elseif ($cpbumd->hasilwawan >= 75 && $cpbumd->hasilwawan <= 85)
                            Disarankan
                        @elseif ($cpbumd->nilaiassess >= 86)
                            Sangat Disarankan
                        @else
                            Angka tidak valid
                        @endif )
                    </p>
                    <hr>
                    <p><strong>Keterangan:</strong> {{ $cpbumd->keterangan }}</p>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('layout.template')
<head>
    <title>Profil CP BUMD</title>
</head>
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
    <div class="sidebar" style="background-color: black">
        <a href="/applicant"><img src="https://brpamdki.org/uploads/images/img20200616085750.jpg" style="width:40px;"
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
            <h2 style="text-align: center">{{ $user->calonpengurus->nama }}</h2>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row" style="font-weight: 400">
                {{-- <div class="col-sm-4 d-flex justify-content-center align-items-center">
                    <img src="https://i0.wp.com/clinicalproblemsolving.com/wp-content/uploads/2020/08/Ruchit-Rana.jpg?ssl=1"
                        style="max-width: 250px; max-height: 300px;" class="rounded">
                </div> --}}
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-2">NIK</div>
                        <div class="col-sm-4">: {{ $user->calonpengurus->nik }}</div>
                        <div class="col-sm-2">Tanggal Lahir</div>
                        <div class="col-sm-4">: {{ Carbon\Carbon::parse($user->calonpengurus->lahir)->format('d/m/Y') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">Pendidikan</div>
                        <div class="col-sm-4">: {{ $user->calonpengurus->pendidikan }}</div>
                        <div class="col-sm-2">Referensi</div>
                        <div class="col-sm-4">: {{ $user->calonpengurus->referensi }}</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">Pengalaman</div>
                        <div class="col-sm-10">: {{ $user->calonpengurus->pengalaman }}</div>
                    </div>
                    <a href="{{ url('/user/' . $user->id . '/edit') }}"
                        class="btn btn-custom-edit btn-sm">Edit</a>
                </div>
            </div>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm" style="font-weight: 400">
            <p>Hasil Tes Administrasi:
                {{ $user->calonpengurus->hasiladm == 1 ? 'LULUS' : ($user->calonpengurus->hasiladm == 0 ? 'TIDAK LULUS' : 'Belum Ada Hasil') }}
            </p>
            <p>Hasil Tes Assessment:
                {{ $user->calonpengurus->hasilassess == 1 ? 'LULUS' : ($user->calonpengurus->hasilassess == 0 ? 'TIDAK LULUS' : 'Belum Ada Hasil') }}
            </p>
            <p>Nilai Tes Assessment : {{ $user->calonpengurus->nilaiassess }}
                   @if ($user->calonpengurus->nilaiassess == 0)
        Belum melakukan tes
    @elseif ($user->calonpengurus->nilaiassess < 1000)
        Tidak disarankan
    @elseif ($user->calonpengurus->nilaiassess >= 1000 && $user->calonpengurus->nilaiassess <= 1099)
        Disarankan dengan pengembangan
    @elseif ($user->calonpengurus->nilaiassess >= 1100)
        Disarankan
    @else
        Angka tidak valid
    @endif</p>
            <p>Hasil Tes Wawancara:
                {{ $user->calonpengurus->hasilwawan == 1 ? 'LULUS' : ($user->calonpengurus->hasilwawan == 0 ? 'TIDAK LULUS' : 'Belum Ada Hasil') }}
            </p>
            <p>Keterangan : {{ $user->calonpengurus->keterangan }}</p>
        </div>
    </div>
@endsection

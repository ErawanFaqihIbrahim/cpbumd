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

<!-- START DATA -->
@section('content')
    <div class="sidebar" style="background-color: white">
        <a href="/admin"><img src="https://brpamdki.org/uploads/images/img20200616085750.jpg" style="width:40px;"
                class="rounded"></a>
        <!-- TOMBOL TAMBAH DATA -->
        <a href="{{ url('admin/create') }}"><i class="fa fa-fw fa-user-plus fa-lg"></i></a>
        {{-- <a href="{{ url('/jadwal') }}"><i class="fa fa-fw fa-calendar fa-lg"></i></a> --}}
        <div class="sidebar-bottom">
            <a href="/logout"><i class="fa fa-fw fa-sign-out fa-lg"></i></a>
        </div>
    </div>

    <div class="main">
        <div style="padding-top: 20px">
            <h2>Halo, Selamat Datang!</h2><span>
                <h1> {{ $name }} </h1>
            </span>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
                <form class="d-flex" action="{{ url('admin') }}" method="get">
                    <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                        placeholder="Masukkan kata kunci" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>

            <div>
                <a href="{{ route('user.pdf') }}"
                    <button class='btn btn-primary'>Generate PDF</button>
                </a>
                &nbsp;
                <a href="{{ route('user.export') }}"
                    <button class='btn btn-success'>Generate Excel</button>
                </a>
            </div>
<br>
            <!-- TABEL DATA -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-sm-1" style="width: 3%">No</th>
                            {{-- <th class="col-sm-1">NIK</th> --}}
                            <th class="col-sm-2">Nama</th>
                            <th class="col-sm-2" style="width: 9%">Tanggal Lahir</th>
                            <th class="col-sm-1">Pendidikan</th>
                            {{-- <th class="col-sm-1">Pengalaman</th> --}}
                            {{-- <th class="col-sm-1">Referensi</th> --}}
                            {{-- <th class="col-sm-1">Keterangan</th> --}}
                            <th class="col-sm-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td style="width: 3%">{{ $i }}</td>
                                {{-- <td>{{ $item->nik }}</td> --}}
                                <td>{{ $item->nama }}</td>
                                <td style="width: 9%">{{ Carbon\Carbon::parse($item->lahir)->format('d/m/Y') }}</td>
                                <td>{{ $item->pendidikan }}</td>
                                {{-- <td>{{ $item->pengalaman }}</td> --}}
                                {{-- <td>{{ $item->referensi }}</td> --}}
                                {{-- <td>{{ $item->keterangan }}</td> --}}
                                <td>
                                    <a href="{{ url('admin/' . $item->nik . '/edit') }}"
                                        class="btn btn-custom-edit btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Hapus Data?')" class='d-inline'
                                        action="{{ url('admin/' . $item->nik) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit"
                                            class="btn btn-custom-hapus btn-sm">Hapus</button>
                                    </form>
                                    <a href="{{ url('admin/' . $item->nik) }}"
                                        class="btn btn-custom-detail btn-sm">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->withQueryString()->links() }}
        </div>
    </div>
@endsection
<!-- AKHIR DATA -->

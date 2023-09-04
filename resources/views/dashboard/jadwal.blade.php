@extends('layout.template')
@section('style')
    <style>
        * {
            box-sizing: border-box
        }

        /* Set height of body and the document to 100% */
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Poppins;
        }

        /* Style tab links */
        .tablink {
            background-color: #555;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }

        .tablink:hover {
            background-color: #777;
        }

        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            color: white;
            display: none;
            padding: 100px 20px;
            height: auto;
        }

        #biodata {
            background-color: rgb(116, 117, 89);
        }

        #administrasi {
            background-color: rgb(128, 133, 81);
        }

        #assessment {
            background-color: rgb(124, 128, 57);
        }

        #wawancara {
            background-color: rgb(15, 176, 66);
        }
    </style>
@endsection

@section('content')
    <div style="padding-top: 30px;">
        <h1 style="padding-bottom: 30px;">Jadwal Kegiatan Seleksi CP BUMD</h1>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('admin') }}" class="btn btn-secondary"><i class="fa fa-fw fa-chevron-left"></i> Back</a>
            <br>
            <br>
            <h3>Pengumuman Seleksi Administrasi</h3>

            <form action="{{ route('update-jadwal') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <label for="tglseleksiadm" class="col-sm-2 col-form-label text-dark">Tanggal Seleksi
                            Administrasi</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglseleksiadm'
                            {{-- value="{{ $jadwal->tglseleksiadm }}"  --}}
                            id="tglseleksiadm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tglpengumumanadm" class="col-sm-2 col-form-label text-dark">Tanggal Pengumuman
                            Administrasi</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglpengumumanadm'
                            {{-- value="{{ $jadwal->tglpengumumanadm }}"  --}}
                            id="tglpengumumanadm">
                        </div>
                    </div>
                </div>

                <h3>Tanggal Tes Assessment</h3>

                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <label for="tglseleksiassess" class="col-sm-2 col-form-label text-dark">Tanggal Tes
                            Assessment</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglseleksiassess'
                            {{-- value="{{ $jadwal->tglseleksiassess }}"  --}}
                            id="tglseleksiassess">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lokasiassess" class="col-sm-2 col-form-label text-dark">Lembaga Tes Assessment</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='lokasiassess'
                            {{-- value="{{ $jadwal->lokasiassess }}"  --}}
                            id="lokasiassess">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tglpengumumanassess" class="col-sm-2 col-form-label text-dark">Tanggal Pengumuman
                            Tes</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglpengumumanassess'
                            {{-- value="{{ $jadwal->tglpengumumanassess }}"  --}}
                            id="tglpengumumanassess">
                        </div>
                    </div>
                </div>

                <h3>Tanggal Seleksi Wawancara</h3>
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <label for="tglseleksiwawan" class="col-sm-2 col-form-label text-dark">Tanggal Seleksi
                            Wawancara</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglseleksiwawan'
                            {{-- value="{{ $jadwal->tglseleksiwawan }}  --}}
                            id="tglseleksiwawan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lokasiwawan" class="col-sm-2 col-form-label text-dark">Lokasi Tes
                            Wawancara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='lokasiwawan'
                            {{-- value="{{ $jadwal->lokasiwawan }}"  --}}
                            id="lokasiwawan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tglpengumumanwawan" class="col-sm-2 col-form-label text-dark">Tanggal Pengumuman
                            Wawancara</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name='tglpengumumanwawan'
                            {{-- value="{{ $jadwal->tglpengumumanwawan }}"  --}}
                            id="tglpengumumanwawan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tglpengumumanwawan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layout.template')

<!-- START FORM -->
@section('content')
    <div style="padding-top: 30px;">
        <h1 style="padding-bottom: 30px;">Tambah Data Calon Pengurus</h1>
        <form action='{{ url('admin') }}' method='post'>
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('admin') }}" class="btn btn-secondary"><i class="fa fa-fw fa-chevron-left"></i> Back</a>
                <div class="mb-3 row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='nik' value="{{ Session::get('nik') }}"
                            id="nik">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}"
                            id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='lahir' value="{{ Session::get('lahir') }}"
                            id="lahir">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="pendidikan" value="{{ Session::get('pendidikan') }}"
                            id="pendidikan">
                            <option value="">-- Pendidikan Terakhir --</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Magister">Magister</option>
                            <option value="Doktor">Doktor</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='pengalaman'
                            value="{{ Session::get('pengalaman') }}" id="pengalaman">
                        <small class="text text-danger">* Pisahkan tiap pengalaman dengan ";"</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="referensi" class="col-sm-2 col-form-label">Referensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='referensi' value="{{ Session::get('referensi') }}"
                            id="referensi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglseleksiadm" class="col-sm-2 col-form-label text-dark">Tanggal Seleksi
                        Administrasi</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='tglseleksiadm' {{-- value="{{ $jadwal->tglseleksiadm }}"  --}}
                            id="tglseleksiadm">
                            <small class="text text-danger">* Kosongkan jika kandidat belum melakukan tes</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hasiladm" class="col-sm-2 col-form-label">Hasil Seleksi Administrasi</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="hasiladm" value="{{ Session::get('hasiladm') }}" id="hasiladm">
                            <option value="">-- Hasil Kelulusan --</option>
                            <option value="Tidak Memenuhi Syarat">Tidak Memenuhi Syarat</option>
                            <option value="Memenuhi Syarat">Memenuhi Syarat</option>
                            <option value="Belum Mengirim Berkas">Belum Mengirim Berkas</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglseleksiassess" class="col-sm-2 col-form-label text-dark">Tanggal Tes
                        Assessment</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='tglseleksiassess' {{-- value="{{ $jadwal->tglseleksiassess }}"  --}}
                            id="tglseleksiassess">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasiassess" class="col-sm-2 col-form-label text-dark">Lembaga Tes Assessment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='lokasiassess' {{-- value="{{ $jadwal->lokasiassess }}"  --}}
                            id="lokasiassess">
                            <small class="text text-danger">* Isi - jika tidak ada</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nilaiassess" class="col-sm-2 col-form-label text-dark">Nilai Tes
                        Assessment</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" name='nilaiassess'
                            value="{{ Session::get('nilaiassess') }}" id="nilaiassess">
                        <small class="text text-danger">* Isi 0 jika kandidat belum melakukan tes</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglseleksiwawan" class="col-sm-2 col-form-label text-dark">Tanggal
                        Wawancara</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='tglseleksiwawan' {{-- value="{{ $jadwal->tglseleksiwawan }}  --}}
                            id="tglseleksiwawan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasiwawan" class="col-sm-2 col-form-label text-dark">Lokasi Tes
                        Wawancara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='lokasiwawan' {{-- value="{{ $jadwal->lokasiwawan }}"  --}}
                            id="lokasiwawan">
                            <small class="text text-danger">* Isi - jika tidak ada</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hasilwawan" class="col-sm-2 col-form-label">Nilai Wawancara</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" name='hasilwawan'
                            value="{{ Session::get('hasilwawan') }}" id="hasilwawan">
                        <small class="text text-danger">* Isi 0 jika kandidat belum melakukan tes</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='keterangan'
                            value="{{ Session::get('keterangan') }}" id="keterangan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keterangan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
<!-- AKHIR FORM -->

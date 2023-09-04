@extends('layout.template')

<!-- START FORM -->
@section('content')
<div style="padding-top: 30px;">
    <h1 style="padding-bottom: 30px;">Edit Data Calon Pengurus</h1>
    <form action='{{ url('admin/' . $data->nik) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('admin') }}" class="btn btn-secondary"><i class="fa fa-fw fa-chevron-left"></i> Back</a>
            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    {{ $data->nik }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}"
                        id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='lahir' value="{{ $data->lahir }}"
                        id="lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm-10">
                    <select class="form-select" name="pendidikan" id="pendidikan">
                        <option value="Diploma" {{ $data->pendidikan == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                        <option value="Sarjana" {{ $data->pendidikan == 'Sarjana' ? 'selected' : '' }}>Sarjana</option>
                        <option value="Magister" {{ $data->pendidikan == 'Magister' ? 'selected' : '' }}>Magister</option>
                        <option value="Doktor" {{ $data->pendidikan == 'Doktor' ? 'selected' : '' }}>Doktor</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pengalaman' value="{{ $data->pengalaman }}"
                        id="pengalaman">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="referensi" class="col-sm-2 col-form-label">Referensi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='referensi' value="{{ $data->referensi }}"
                        id="referensi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tglseleksiadm" class="col-sm-2 col-form-label text-dark">Tanggal Seleksi
                    Administrasi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tglseleksiadm' value="{{ $data->tglseleksiadm }}"
                        id="tglseleksiadm">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hasiladm" class="col-sm-2 col-form-label">Hasil Seleksi Administrasi</label>
                <div class="col-sm-10">
                    <select class="form-select" name="hasiladm" id="hasiladm">
                        <option value="Tidak Memenuhi Syarat" {{ $data->hasiladm == 'Tidak Memenuhi Syarat' ? 'selected' : '' }}>Tidak Memenuhi Syarat</option>
                        <option value="Memenuhi Syarat" {{ $data->hasiladm == 'Memenuhi Syarat' ? 'selected' : '' }}>Memenuhi Syarat</option>
                        <option value="Belum Mengirim Berkas" {{ $data->hasiladm == 'Belum Mengirim Berkas' ? 'selected' : '' }}>Belum Mengirim Berkas</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tglseleksiassess" class="col-sm-2 col-form-label text-dark">Tanggal Tes
                    Assessment</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tglseleksiassess' value="{{ $data->tglseleksiassess }}"
                        id="tglseleksiassess">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasiassess" class="col-sm-2 col-form-label text-dark">Lembaga Tes Assessment</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='lokasiassess' value="{{ $data->lokasiassess }}"
                        id="lokasiassess">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilaiassess" class="col-sm-2 col-form-label text-dark">Nilai Tes
                    Assessment</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" name='nilaiassess'
                    value="{{ $data->nilaiassess }}" id="nilaiassess">
                    <small class="text text-danger">* Isi 0 jika kandidat belum melakukan tes</small>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tglseleksiwawan" class="col-sm-2 col-form-label text-dark">Tanggal
                    Wawancara</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tglseleksiwawan'  value="{{ $data->tglseleksiwawan }}"
                        id="tglseleksiwawan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasiwawan" class="col-sm-2 col-form-label text-dark">Lokasi Tes
                    Wawancara</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='lokasiwawan' value="{{ $data->lokasiwawan }}"
                        id="lokasiwawan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hasilwawan" class="col-sm-2 col-form-label">Nilai Wawancara</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" name='hasilwawan'
                    value="{{ $data->hasilwawan }}" id="hasilwawan">
                    <small class="text text-danger">* Isi 0 jika kandidat belum melakukan tes</small>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='keterangan'
                    value="{{ $data->keterangan }}" id="keterangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan
                        Data</button></div>
            </div>
        </div>
    </form>
</div>
@endsection
<!-- AKHIR FORM -->

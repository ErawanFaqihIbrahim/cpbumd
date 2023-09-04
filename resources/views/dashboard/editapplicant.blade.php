@extends('layout.template')

<!-- START FORM -->
@section('content')
    <div style="padding-top: 30px;">
        <h1 style="padding-bottom: 30px;">Edit Data Calon Pengurus</h1>
        {{-- {{$data->user->id}} --}}
        <form action='/user/{{$data->user->id}}' method='POST'>
            @csrf
            @method('PUT')
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="/user/{{ auth()->user()->id }}" class="btn btn-secondary"><i class="fa fa-fw fa-chevron-left"></i> Back</a>
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
                    <label for="keterangan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan
                            Data</button></div>
                </div>
            </div>
        </form>
    </div>
@endsection
<!-- AKHIR FORM -->

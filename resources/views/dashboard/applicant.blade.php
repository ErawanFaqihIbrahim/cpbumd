@extends('layout.template')
<head>
    <title>Pendaftaran CP BUMD</title>
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
            background-color: cornsilk;
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

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
@endsection

<!-- START DATA -->
@section('content')
    <div class="sidebar">
        <a href="/applicant"><i class="fa fa-fw fa-home fa-lg"></i></a>
        <a href="/user/{{ auth()->user()->id }}"><i class="fa fa-fw fa-user fa-lg"></i></a>
        <div class="sidebar-bottom">
            <a href="/logout"><i class="fa fa-fw fa-sign-out fa-lg"></i></a>
        </div>
    </div>

    <div class="main">

        <br>
        <div>
            <h2>Halo, Selamat Datang!</h2><span>
                <h1> {{ $name }} </h1>
            </span>
        </div>

        <br>
        <br>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2>3 Tahap Seleksi Calon Pengurus BUMD DKI Jakarta</h2>
            <br>
            <br>
            <button class="accordion"><b>1. Seleksi Administrasi</b></button>
            <div class="panel">
                <p>Seleksi administrasi CP BUMD (Badan Usaha Milik Daerah) merujuk pada proses seleksi administratif untuk
                    calon pegawai yang ingin bergabung dengan perusahaan milik daerah atau BUMD. BUMD adalah badan usaha
                    yang didirikan oleh pemerintah daerah atau provinsi untuk mengelola dan mengembangkan sektor ekonomi
                    dalam wilayahnya. Proses seleksi administrasi CP BUMD dilakukan untuk memilih calon pegawai yang
                    memenuhi persyaratan administratif dan teknis yang telah ditetapkan oleh BUMD tersebut.</p>
                <p>Tujuan dari seleksi administrasi ini adalah untuk menyaring calon-calon yang memenuhi persyaratan dasar
                    dan memiliki potensi untuk mengisi posisi yang dibutuhkan dalam organisasi BUMD. Berikut adalah
                    tahapan-tahapan umum yang biasanya terjadi dalam seleksi administrasi CP BUMD:</p>
                <ol>
                    <li>Pendaftaran: Calon pelamar mengisi formulir pendaftaran yang disediakan oleh BUMD. Formulir ini
                        biasanya berisi informasi pribadi, riwayat pendidikan, pengalaman kerja, dan kualifikasi lainnya
                        yang relevan.</li>
                    <li>Verifikasi Dokumen: BUMD akan melakukan verifikasi terhadap dokumen-dokumen yang dilampirkan oleh
                        calon pelamar, seperti ijazah, sertifikat pelatihan, transkrip nilai, dan dokumen lainnya yang
                        dibutuhkan. Tujuan verifikasi dokumen ini adalah untuk memastikan keaslian dan keabsahan informasi
                        yang diberikan oleh calon pelamar.</li>
                    <li>Seleksi Administrasi: Pada tahap ini, BUMD akan melakukan penilaian terhadap berkas-berkas pelamar.
                        Penilaian ini dapat mencakup pengecekan persyaratan formal, seperti kelayakan pendidikan, pengalaman
                        kerja, serta kemampuan dan keterampilan yang relevan dengan posisi yang dilamar. Calon pelamar yang
                        memenuhi persyaratan administratif akan melanjutkan ke tahap seleksi berikutnya.</li>
                    <li>Pengumuman Hasil Seleksi Administrasi: BUMD akan mengumumkan hasil seleksi administrasi kepada calon
                        pelamar. Pengumuman ini biasanya berupa daftar nama pelamar yang dinyatakan lolos seleksi
                        administrasi dan berhak mengikuti tahap seleksi selanjutnya.</li>
                </ol>
                <p>Seleksi administrasi CP BUMD merupakan tahap awal dalam proses seleksi penerimaan pegawai. Setelah
                    seleksi administrasi, biasanya akan ada tahapan-tahapan seleksi berikutnya, seperti tes tertulis, tes
                    keterampilan, wawancara, dan tes psikologi. Tahapan-tahapan tersebut akan ditentukan oleh BUMD
                    berdasarkan kebutuhan organisasi dan ketentuan yang berlaku.</p>
                <p>Perlu dicatat bahwa proses seleksi administrasi CP BUMD dapat bervariasi tergantung pada kebijakan dan
                    prosedur yang diterapkan oleh masing-masing BUMD. Oleh karena itu, penting bagi calon pelamar untuk
                    memperoleh informasi terkini mengenai proses seleksi administrasi dari BUMD yang bersangkutan.</p>
            </div>

            <button class="accordion"><b>2. Tes Assessment</b></button>
            <div class="panel">
                <p>Tes assessment CP BUMD (Badan Usaha Milik Daerah) merujuk pada serangkaian tes dan evaluasi yang
                    dilakukan untuk mengukur potensi, kemampuan, dan kualifikasi calon pegawai yang ingin bergabung dengan
                    perusahaan milik daerah tersebut. Tes assessment ini dirancang untuk mengevaluasi berbagai aspek seperti
                    kepribadian, keterampilan, pengetahuan, dan potensi pengembangan calon pegawai.</p>
                <p>Berikut adalah beberapa jenis tes assessment yang umum dilakukan dalam seleksi CP BUMD:</p>
                <ol>
                    <li>Tes Psikometrik: Tes ini bertujuan untuk mengukur aspek-aspek psikologis calon pegawai, seperti
                        kepribadian, kecerdasan, dan kemampuan berpikir. Contoh tes psikometrik yang sering digunakan adalah
                        tes kepribadian (misalnya, tes MBTI atau Big Five) dan tes kecerdasan umum (misalnya, tes IQ atau
                        tes kemampuan verbal dan numerik).</li>
                    <li>Tes Kemampuan Teknis: Tes ini dirancang untuk mengukur pengetahuan dan kemampuan teknis calon
                        pegawai yang relevan dengan posisi yang dilamar. Misalnya, jika posisi yang dibutuhkan adalah
                        akuntan, tes kemampuan teknis dapat mencakup soal akuntansi dan pemahaman terkait peraturan
                        perpajakan.</li>
                    <li>Studi Kasus atau Simulasi: Tes ini melibatkan pemberian situasi atau masalah yang mungkin dihadapi
                        oleh calon pegawai dalam pekerjaan sehari-hari. Calon pegawai diminta untuk menganalisis masalah,
                        mengambil keputusan, atau memberikan solusi yang tepat. Tes ini bertujuan untuk mengevaluasi
                        kemampuan pemecahan masalah, kreativitas, dan kemampuan berpikir analitis.</li>
                    <li>Wawancara: Wawancara merupakan tes assessment yang paling umum digunakan. Pada tahap ini, calon
                        pegawai akan diwawancarai oleh pihak BUMD. Wawancara dapat mencakup berbagai aspek, termasuk
                        pengalaman kerja sebelumnya, pengetahuan tentang perusahaan, motivasi, serta keterampilan komunikasi
                        dan interpersonal.</li>
                    <li>Evaluasi Kelompok: Tes ini melibatkan kegiatan yang dilakukan dalam kelompok, di mana calon pegawai
                        harus berinteraksi dan bekerja sama dengan peserta lainnya. Pada tes ini, calon pegawai akan
                        dievaluasi berdasarkan kemampuan bekerja dalam tim, kepemimpinan, komunikasi, serta kemampuan untuk
                        mencapai tujuan secara kolaboratif.</li>
                </ol>
                <p>Setelah melalui serangkaian tes assessment tersebut, hasil evaluasi akan digunakan untuk menentukan
                    kecocokan calon pegawai dengan posisi yang dilamar serta potensi pengembangan di dalam perusahaan milik
                    daerah. Penting untuk dicatat bahwa jenis dan jumlah tes assessment yang digunakan dapat bervariasi
                    tergantung pada kebijakan dan kebutuhan BUMD yang bersangkutan.</p>
            </div>

            <button class="accordion"><b>3. Seleksi Wawancara</b></button>
            <div class="panel">
                <p>Wawancara merupakan salah satu jenis tes yang umum dilakukan dalam seleksi CP BUMD. Pada tahap ini, calon
                    pegawai akan diwawancarai oleh pihak BUMD. Wawancara bertujuan untuk mengevaluasi berbagai aspek,
                    termasuk pengalaman kerja sebelumnya, pengetahuan tentang perusahaan, motivasi, serta keterampilan
                    komunikasi dan interpersonal calon pegawai.</p>
                <p>Wawancara dalam seleksi CP BUMD dapat meliputi beberapa hal, antara lain:</p>
                <ul>
                    <li>Pengalaman Kerja: Calon pegawai akan ditanya mengenai pengalaman kerja sebelumnya, proyek-proyek
                        yang pernah dihadapi, peran dan tanggung jawab yang diemban, serta pencapaian yang telah diraih.
                    </li>
                    <li>Pengetahuan tentang Perusahaan: Calon pegawai diharapkan memiliki pemahaman yang baik tentang
                        perusahaan milik daerah tersebut, termasuk visi dan misi, tujuan perusahaan, serta proyek atau
                        program yang sedang berjalan.</li>
                    <li>Motivasi: Pihak BUMD juga akan mengevaluasi motivasi calon pegawai untuk bergabung dengan perusahaan
                        tersebut, termasuk alasan memilih posisi yang dilamar dan kontribusi yang dapat diberikan kepada
                        perusahaan.</li>
                    <li>Keterampilan Komunikasi dan Interpersonal: Calon pegawai akan dievaluasi dalam hal kemampuan
                        berkomunikasi dengan baik, presentasi diri, kemampuan mendengarkan, serta kemampuan berinteraksi dan
                        bekerja sama dengan orang lain.</li>
                </ul>
                <p>Hasil dari seleksi wawancara akan digunakan sebagai salah satu pertimbangan dalam menentukan kecocokan
                    calon pegawai dengan posisi yang dilamar serta kemampuan adaptasi dan kontribusi yang dapat diberikan
                    kepada perusahaan milik daerah.</p>
            </div>

            <!-- TABEL DATA -->
            {{-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-sm-1">NIK</th>
                        <th class="col-sm-2">Nama</th>
                        <th class="col-sm-2">Tanggal Lahir</th>
                        <th class="col-sm-1">Pendidikan</th>
                        <th class="col-sm-1">Pengalaman</th>
                        <th class="col-sm-1">Referensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        @if ($item->user_id == auth()->id())
                            {{-- Replace 'user_id' with the actual column name that represents the user ID --}}
            {{-- <tr>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->lahir }}</td>
                                <td>{{ $item->pendidikan }}</td>
                                <td>{{ $item->pengalaman }}</td>
                                <td>{{ $item->referensi }}</td>
                            </tr> --}}
            {{-- @endif
                    @endforeach
                </tbody> --}}
            {{-- </table> --}}

        </div>

    </div>
@endsection
@section('script')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
@endsection
<!-- AKHIR DATA -->

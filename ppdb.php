<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - Pesantren Daarul Hikmah</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS untuk mengatur jarak antar elemen */
        .mt-4 {
            margin-top: 2rem;
        }

        .mb-4 {
            margin-bottom: 2rem;
        }

        /* Custom CSS untuk card */
        .info-card {
            background-color: #f8f9fa;
            border: none;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-height: fit-content; /* Tambahkan properti min-height */
        }

        /* Custom CSS untuk logo pesantren */
        .pesantren-logo {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }

        /* Custom CSS untuk tombol formulir pendaftaran */
        .btn-form {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Header dengan logo pesantren -->
    <div class="jumbotron text-center">
        <img src="image/logo_pesantren.jpg" class="pesantren-logo mb-4" alt="Logo Pesantren">
        <h1 class="display-4">PPDB Pesantren Tahfizh Al-Qur'an Daarul Hikmah</h1>
        <hr class="my-4">
        <p>Jl. Kamelia, Bukit Nusa Indah, B. 17&18. RT/RW. 007 /015</p>
        <p>Kel. Serua, Kec. Ciputat. Kota Tangerang Selatan. Provinsi Banten</p>
    </div>

    <!-- Informasi PPDB -->
    <div class="container">
        <h2 class="text-center mb-4">Pendaftaran Santri Baru</h2>

        <!-- Pertanyaan dan jawaban -->
        <div class="accordion" id="accordionExample">
            <!-- Pertanyaan 1 -->
            <div class="card mb-2">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Syarat Pesantren Tahfizh Al-Qur’an (Santri ber-asrama)
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Usia kelas 3, 4, 5, 6 (SD) /Kelas 1 / 2 SMP</p>
                        <p>Lulus SD /MI dan Berijazah / putus sekolah</p>
                        <p>Lulus seleksi karantina</p>
                        <p>Bebas biaya bagi Yatim yang dhuafa</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 2 -->
            <div class="card mb-2">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Waktu dan Tempat
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Pendaftaran dibuka mulai Januari 2024. Ditutup apabila kuota sudah penuh</p>
                        <p>Pagi s/d Sore Pukul 08.00 s.d 16.00</p>
                        <p>Tempat, Kantor Pesantren Al-Qur’an Daarul Hikmah, Bukit Nusa Indah RT.07 RW.15 Serua Ciputat Tangerang Selatan. Telp. 085811112566/081288023636/089601381969</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 3 -->
            <div class="card mb-2">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Biaya Pendaftaran
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Biaya Pendaftaran Rp. 100.000,- meliputi Formulir Pendaftaran dan Tes Masuk (Baca Tulis Al-Qur’an)</p>
                        <p>Biaya Orientasi Rp. 500.000,- meliputi Mukim selama 7 hari, Makan dan Minum, Tes Kemandirian dan Kedisiplinan, Tes Kompetensi Hafalan Al-Qur’an</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 4 -->
            <div class="card mb-2">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Prosedur Pendaftaran
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Pendaftaran dilakukan secara langsung dikantor Pesantren Al-Qur’an Daarul Hikmah</p>
                        <p>Mengisi Formulir Pendaftaran</p>
                        <p>Melengkapi berkas-berkas pendaftaran, yaitu :</p>
                        <ul>
                            <li>Foto copy Ijazah yang dilegalisir</li>
                            <li>Foto copy Akte Kelahiran</li>
                            <li>Foto copy KK</li>
                            <li>Foto copy KTP Orang tua dan Kartu Keluarga</li>
                            <li>Pas foto berwarna terbaru 3×4 (5 lembar)</li>
                            <li>Mengisi Ikrar Orang tua</li>
                            <li>Menyerahkan surat keterangan tidak mampu /yatim dhuafa</li>
                        </ul>
                        <p>Penyerahan berkas pendaftaran dilakukan pada awal mukim 14 Juli 2024</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 5 -->
            <div class="card mb-2">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Test dan seleksi
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Lisan : Meliputi, Baca Tulis Al-Qur’an dan wawancara serta Orientasi</p>
                        <p>Tes Kualifikasi : memiliki kemampuan membaca Al-Qur’an dengan baik, memiliki niat dan semangat kuat menghafal Al-Qur’an, bermental mandiri, istiqomah, sabar, ikhlas, dan sungguh-sungguh.</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 6 -->
            <div class="card mb-2">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Orientasi Santri
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Pelaksanaan orientasi selama 7 hari, yaitu mukim di pondok tidakboleh pulang ke rumah (apabila diketahui pulang maka “TIDAK LULUS”)</p>
                        <p>Selama orientasi semua perlengkapan santri dilengkapi</p>
                        <p>Pengumumam kelulusan santri akan diberitahukan melalui papan info setelah orientasi.</p>
                        <p>Calon santri/wali santri wajib hadir pada acara (SOP) silaturahim, orientasi dan pembekalan santri baru setelah dinyatakan Lulus</p>
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 7 -->
            <div class="card mb-2">
                <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Kewajiban Wali Santri
                        </button>
                    </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Biaya daftar santri baru tahun pendidikan 2024-2025</p>
                        <p>Membayar biaya program pendidikan pada tanggal 5 tiap bulan sebesar kemampuan pada saat orang tua dengan mengisi formulir yang disediakan oleh pesantren.</p>
                        <p>Biaya program pendidikan dapat di transfer melalui rekening, Yayasan Daarul Hikmah Bukit Nusa Indah, Mandiri KCP. Bintaro. 1640001141847</p>
                        <p>Melengkapi keperluan santri selama Mondok/Mesantren</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Formulir Pendaftaran -->
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScQdy1gpfKju6G7DS-qWNIt1SJPuzbajiAghF1mJGA944w7-Q/viewform"
            class="btn btn-primary btn-lg btn-form mt-4">Formulir Pendaftaran</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

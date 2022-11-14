@extends('layouts.frontend')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/frontend/css/styles.css') }}">
@endsection

@section('content')
<!-- BEGIN::Page Header -->
<header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
    <div class="page-header-ui-content pt-10">
        <div class="container px-5 text-center">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <h1 class="page-header-ui-title mb-3">Produksi Industri Rumah Tangga (PIRT)</h1>
                    <p class="page-header-ui-text">Terdaftarnya Produk Bisnis atau Usaha sebagai pondasi utama dalam menjalankan Bisnis atau Usaha.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Production Licensed -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Apa itu PIRT?</h2>
                <p class="mb-0">PIRT (Perizinan Produksi Industri Rumah Tangga) adalah suatu izin untuk industri makanan dan minuman berskala rumahan. Umumnya PIRT disertakan dalam sebuah label di kemasan produk, yang berupa deretan nomor yang terdaftar pada Dinas Kesehatan sdi Kota atau Kabupaten setempat. Walaupun PIRT hanya dikeluarkan oleh Dinas Kesehatan setempat, PIRT bisa jadi jaminan bahwa produk tersebut aman. Hal ini dikarenakan perndaftaran PIRT harus menyertakan hasil uji laboratorium bahwa produk makanan atau minuman tersebut aman untuk dikonsumsi.</p>
                <hr class="my-5" />
                <h2 class="mb-4">Cara pengurusan PIRT</h2>
                <div class="accordion shadow mb-5" id="accordionPirt01">
                    <div class="accordion-item">
                        <div class="d-flex align-items-center justify-content-between px-4 py-5">
                            <div class="me-3">
                                <h4 class="mb-0">Tahapan</h4>
                                <p class="card-text text-gray-500">Rincian setiap langkah pengurusan PIRT</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt01"><button class="accordion-button p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt01" aria-expanded="true" aria-controls="collapsePirt01">Datang ke Dinas Kesehatan (DINKES)</button></h5>
                        <div class="accordion-collapse collapse show" id="collapsePirt01" aria-labelledby="headingPirt01" data-bs-parent="#accordionPirt01">
                            <div class="accordion-body p-4">
                                Dengan membawa syarat sebagai berikut:
                                <ol>
                                    <li>Mengisi formulir pendaftaran (nama perusahaan, alamat, nama pemilik, alamat pemilik, nama produk, jenis produk, proses pembuatan, jenis kemasan, mencantumkan komposisi, dan desain kemasan)</li>
                                    <li>Fotokopi KTP</li>
                                    <li>Pas foto 3 x 4 sebanyak 2 lembar</li>
                                    <li>Surat keterangan usaha dari Puskesmas (yang keluar setelah petugas Puskesmas meninjau lokasi usaha)</li>
                                    <li>Denah lokasi usaha</li>
                                    <li>Draft label produk yang terdapat dalam kemasan (nama produk, merek, produsen, alamat produsen, komposisi, berat bersih, tanggal kedaluwarsa, kode produksi, nomor PIRT)</li>
                                    <li>Stempel usaha.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt02"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt02" aria-expanded="false" aria-controls="collapsePirt02">Mengikuti Penyuluhan Keamanan Pangan</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt02" aria-labelledby="headingPirt02" data-bs-parent="#accordionPirt01">
                            <div class="accordion-body p-4">
                                Penyuluhan ini bersifat kolektif, yaitu dilaksanakan jika peserta sudah memenuhi kuota yang ditentukan. Adapun, materi penyuluhan yang diberikan, antara lain:
                                <ol>
                                    <li>Cara memilih bahan mentah dan bahan tambahan pangan</li>
                                    <li>Pedoman cara produksi pangan yang baik untuk IRT (Industri Rumah Tangga)</li>
                                    <li>Penyakit-penyakit akibat pangan</li>
                                    <li>Higiene sanitasi pengolahan pangan dan karyawan</li>
                                    <li>Undang-undang dan pengawasan pangan</li>
                                    <li>Pengendalian proses dalam pengolahan pangan</li>
                                    <li>Tata cara penyelenggaraan sertifikasi produksi pangan IRT</li>
                                    <li>Kontaminasi silang dan cara mengatasinya</li>
                                    <li>Mikroba dan kerusakan mikrobiologisnya</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt03"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt03" aria-expanded="false" aria-controls="collapsePirt03">Survei Lapangan oleh Petugas Puskesmas</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt03" aria-labelledby="headingPirt03" data-bs-parent="#accordionPirt01">
                            <div class="accordion-body p-4">
                                Survei dan pengecekan ke lokasi usaha tersebut bertujuan untuk melihat proses produksi serta bahan-bahan yang dipergunakan. Jika memang dibutuhkan, sampel pangan pun akan diteliti dengan uji laboratorium. Adapun beberapa aspek yang disurvei, antara lain:
                                <ol>
                                    <li>Lingkungan produksi meliputi kebersihan lingkungan</li>
                                    <li>Bangunan dan fasilitas meliputi ukuran bangunan, ventilasi, tempat cuci tangan, dan lain sebagainya</li>
                                    <li>Peralatan produksi meliputi kebersihan dan kelengkapannya</li>
                                    <li>Suplai air apakah mencukupi</li>
                                    <li>Fasilitas kegiatan higiene dan sanitasi meliputi ketersediaan sarana mencuci yang cukup baik, posisi toilet/jamban dengan tempat produksi, dan ketersediaan tempat sampah tertutup</li>
                                    <li>Kesehatan higiene karyawan</li>
                                    <li>Pengawasan oleh penanggung jawab</li>
                                    <li>Pencatatan dokumentasi dan administrasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt04"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt04" aria-expanded="false" aria-controls="collapsePirt04">Mengambil Sertifikat Produksi Pangan Industri Rumah Tangga</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt04" aria-labelledby="headingPirt04" data-bs-parent="#accordionPirt01">
                            <div class="accordion-body p-4">
                                Jika semua tahap yang dilewati sesuai prosedur, PIRT akan keluar dalam waktu kurang lebih 2 minggu. Peserta pengajuan PIRT akan mendapatkan dua sertifikat, yaitu sertifikat penyuluhan dan sertifikat PIRT. Dari situ, otomatis produk usahamu sudah terdaftar secara legal pada Dinas Kesehatan dan wajib diperbaharui setelah masa berlakunya sudah habis (3 atau 5 tahun).
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Pengajuan perpanjangan PIRT dapat dilakukan paling lambat 6 (enam) bulan sebelum masa berlaku PIRT berakhir. Proses perpanjangan dan perubahan pemilik sama seperti proses permohonan PIRT.</p>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Production Licensed -->
@endsection

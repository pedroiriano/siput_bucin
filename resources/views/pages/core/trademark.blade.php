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
                    <h1 class="page-header-ui-title mb-3">Hak Kekayaan Intelektual</h1>
                    <p class="page-header-ui-text">Dapatkan Perlindungan terhadap Hak Cipta.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Market -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Apa itu Hak Kekayaan Intelektual?</h2>
                <p>Hak Kekayaan Intelektual atau yang biasa disebut dengan HAKI adalah hak yang didapatkan dari hasil olah pikir Manusia untuk dapat menghasilkan suatu produk, jasa, atau proses yang berguna untuk Masyarakat.</p>
                <p class="mb-0">Jadi dapat disimpulkan bahwa HAKI adalah hak untuk menikmati secara ekonomis hasil dari  suatu kreativitas intelektual. Objek yang diatur dalam kekayaan intelektual berupa karya yang dihasilkan oleh kemampuan intelektual Manusia.</p>
                <hr class="my-5" />
                <h2 class="mb-4">Cara pengurusan Hak Kekayaan Intelektual</h2>
                <div class="accordion shadow mb-5" id="accordionHaki01">
                    <div class="accordion-item">
                        <div class="d-flex align-items-center justify-content-between px-4 py-5">
                            <div class="me-3">
                                <h4 class="mb-0">Tahapan</h4>
                                <p class="card-text text-gray-500">Rincian setiap langkah pengurusan Hak Kekayaan Intelektual berdasarkan<a href="https://www.dgip.go.id/menu-utama/merek/syarat-prosedur" target="_blank">aturan Kementerian Hukum dan HAM RI</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHaki01"><button class="accordion-button p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHaki01" aria-expanded="true" aria-controls="collapseHaki01">Syarat</button></h5>
                        <div class="accordion-collapse collapse show" id="collapseHaki01" aria-labelledby="headingHaki01" data-bs-parent="#accordionHaki01">
                            <div class="accordion-body p-4">
                                Berikut ini adalah persyaratan yang harus disiapkan:
                                <ol>
                                    <li>Etiket/Label Merek</li>
                                    <li>Tanda Tangan Pemohon</li>
                                    <li>Surat Rekomendasi UKM Binaan atau Surat Keterangan UKM Binaan Dinas (Asli) - Untuk Pemohon Usaha Mikro dan Usaha Kecil <a href="https://dgip.go.id/uploads/article_file/file/6cf25c52e52779b4dcda63e7f90ea474.pdf" target="_blank">(Unduh Contoh Surat UMK)</a></li>
                                    <li>Surat Pernyataan UMK Bermaterai - Untuk Pemohon Usaha Mikro dan Usaha Kecil <a href="https://dgip.go.id/uploads/media/file/f8b8967e247d1807bc75eb0cfce4ff78.docx" target="_blank">(Unduh Contoh Surat Pernyataan UMK)</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt02"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt02" aria-expanded="false" aria-controls="collapsePirt02">Mengikuti Penyuluhan Keamanan Pangan</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt02" aria-labelledby="headingPirt02" data-bs-parent="#accordionHaki01">
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
                        <div class="accordion-collapse collapse" id="collapsePirt03" aria-labelledby="headingPirt03" data-bs-parent="#accordionHaki01">
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
                        <div class="accordion-collapse collapse" id="collapsePirt04" aria-labelledby="headingPirt04" data-bs-parent="#accordionHaki01">
                            <div class="accordion-body p-4">
                                Jika semua tahap yang dilewati sesuai prosedur, PIRT akan keluar dalam waktu kurang lebih 2 minggu. Peserta pengajuan PIRT akan mendapatkan dua sertifikat, yaitu sertifikat penyuluhan dan sertifikat PIRT. Dari situ, otomatis produk usahamu sudah terdaftar secara legal pada Dinas Kesehatan dan wajib diperbaharui setelah masa berlakunya sudah habis (3 atau 5 tahun).
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Izin Edar yang telah terbit berlaku untuk jangka waktu 5 tahun dan dapat diperpanjang melalui pendaftaran ulang.</p>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Market -->
@endsection

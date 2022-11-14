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
                    <h1 class="page-header-ui-title mb-3">Sertifikasi Halal</h1>
                    <p class="page-header-ui-text">Segera dapatkan tanda kehalalan suatu Produk.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Halal -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Apa itu Sertifikasi Halal?</h2>
                <p class="mb-0">Sertifikat Halal adalah pengakuan kehalalan suatu Produk yang dikeluarkan oleh BPJPH berdasarkan fatwa halal tertulis yang dikeluarkan oleh Kemenag RI.</p>
                <hr class="my-5" />
                <h2 class="mb-4">Cara pengurusan Sertifikasi Halal</h2>
                <div class="accordion shadow mb-5" id="accordionHalal01">
                    <div class="accordion-item">
                        <div class="d-flex align-items-center justify-content-between px-4 py-5">
                            <div class="me-3">
                                <h4 class="mb-0">Tahapan</h4>
                                <p class="card-text text-gray-500">Rincian setiap langkah pengurusan Sertifikasi Halal</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHalal01"><button class="accordion-button p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalal01" aria-expanded="true" aria-controls="collapseHalal01">Melakukan permohonan Sertifikasi Halal</button></h5>
                        <div class="accordion-collapse collapse show" id="collapseHalal01" aria-labelledby="headingHalal01" data-bs-parent="#accordionHalal01">
                            <div class="accordion-body p-4">
                                Pelaku/Penggiat usaha dapat melakukan permohonan secara daring di <a href="https://ptsp.halal.go.id/" target="_blank">ptsp.halal.go.id</a> dengan mempersiapkan beberapa dokumen, yaitu:
                                <ol>
                                    <li>Data Pelaku usaha</li>
                                    <li>Nama dan jenis produk</li>
                                    <li>Daftar produk dan bahan yang digunakan</li>
                                    <li>Pengolahan produk</li>
                                    <li>Denah lokasi usaha</li>
                                    <li>Dokumen sistem jaminan produk halal</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHalal02"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalal02" aria-expanded="false" aria-controls="collapseHalal02">Memeriksa kelengkapan dokumen dan menetapkan Lembaga Pemeriksa Halal</button></h5>
                        <div class="accordion-collapse collapse" id="collapseHalal02" aria-labelledby="headingHalal02" data-bs-parent="#accordionHalal01">
                            <div class="accordion-body p-4">
                                Kemudian BPJPH memeriksa kelengkapan dokumen dan menetapkan Lembaga Pemeriksa Halal. Proses ini memakan waktu 2 hari kerja.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHalal03"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalal03" aria-expanded="false" aria-controls="collapseHalal03">Memeriksa dan/atau menguji kehalalan produk</button></h5>
                        <div class="accordion-collapse collapse" id="collapseHalal03" aria-labelledby="headingHalal03" data-bs-parent="#accordionHalal01">
                            <div class="accordion-body p-4">
                                Setelah itu pihak LPH memeriksa dan/atau menguji kehalalan produk, proses waktunya 15 hari kerja.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHalal04"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalal04" aria-expanded="false" aria-controls="collapseHalal04">Menetapkan kehalalan produk melalui Sidang Fatwa Halal</button></h5>
                        <div class="accordion-collapse collapse" id="collapseHalal04" aria-labelledby="headingHalal04" data-bs-parent="#accordionHalal01">
                            <div class="accordion-body p-4">
                                Selanjutnya, setelah dilakukan pemeriksaan, pihak yang menetapkan kehalalan produk adalah MUI melalui Sidang Fatwa. Proses penetapan produk halal di MUI memakan waktu 3 hari.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingHalal05"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalal05" aria-expanded="false" aria-controls="collapseHalal05">Menerbitkan Sertifikat Halal</button></h5>
                        <div class="accordion-collapse collapse" id="collapseHalal05" aria-labelledby="headingHalal05" data-bs-parent="#accordionHalal01">
                            <div class="accordion-body p-4">
                                Setelah ditetapkan oleh MUI, kembali lagi ke BPJPH. Selanjutnya pihak BPJPH akan menerbitkan Sertifikat Halal. Prosesnya satu hari kerja. Sehingga total waktu yang diperlukan untuk proses Sertifikasi Halal adalah 21 hari kerja.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Halal -->
@endsection

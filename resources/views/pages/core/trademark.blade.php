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
                                <p class="card-text text-gray-500">Rincian setiap langkah pengurusan Hak Kekayaan Intelektual berdasarkan <a href="https://www.dgip.go.id/menu-utama/merek/syarat-prosedur" target="_blank">aturan Kementerian Hukum dan HAM RI</a></p>
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
                        <h5 class="accordion-header" id="headingPirt02"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt02" aria-expanded="false" aria-controls="collapsePirt02">Prosedur Pertama</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt02" aria-labelledby="headingPirt02" data-bs-parent="#accordionHaki01">
                            <div class="accordion-body p-4">
                                Pesan kode billing di <a href="http://simpaki.dgip.go.id/" target="_blank">http://simpaki.dgip.go.id/</a>
                                <ol>
                                    <li>Pilih 'Merek dan Indikasi Geografis' pada jenis pelayanan</li>
                                    <li>Pilih 'Permohonan Pendaftaran Merek yang Diajukan Oleh:'</li>
                                    <li>Pilih 'Usaha Mikro dan Usaha Kecil' atau 'Umum' </li>
                                    <li>Pilih 'Secara Elektronik (Online)'</li>
                                    <li>Masukkan Data Pemohon dan Data Permohonan (nama, alamat lengkap, email dan nomor ponsel, dll)</li>
                                    <li>Lakukan pembayaran PNBP melalui ATM/internet banking/m-banking</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingPirt03"><button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePirt03" aria-expanded="false" aria-controls="collapsePirt03">Prosedur Kedua</button></h5>
                        <div class="accordion-collapse collapse" id="collapsePirt03" aria-labelledby="headingPirt03" data-bs-parent="#accordionHaki01">
                            <div class="accordion-body p-4">
                                Buat Akun dan Log in pada Akun Merek <a href="https://merek.dgip.go.id/" target="_blank">https://merek.dgip.go.id/</a>
                                <ol>
                                    <li>Pilih 'Permohonan Online'</li>
                                    <li>Langkah 1: Pilih tipe permohonan, masukkan Kode billing yang telah dibayarkan</li>
                                    <li>Langkah 2: masukkan Data Pemohon</li>
                                    <li>Langkah 3: diisi jika permohonan dengan kuasa (konsultan ki)</li>
                                    <li>Langkah 4: diisi jika memiliki hak prioritas</li>
                                    <li>Langkah 5: masukkan Data Merek</li>
                                    <li>Langkah 6: masukkan Data Kelas dengan klik 'Tambah'</li>
                                    <li>Langkah 7: klik 'Tambah' untuk mengunggah lampiran dokumen persyaratan</li>
                                    <li>Langkah 8: Preview (pastikan seluruh data Anda sudah benar)</li>
                                    <li>Langkah 9: Cetak Draft Tanda Terima</li>
                                    <li>Klik 'Selesai'</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Biaya Umum Rp. 1.800.000/kelas, sedangkan biaya UMK Rp. 500.000/kelas.</p>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Market -->
@endsection

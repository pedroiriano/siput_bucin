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
                    <h1 class="page-header-ui-title mb-3">Izin Edar</h1>
                    <p class="page-header-ui-text">Dapatkan Izin Edar dari BPOM agar produk yang Anda jual lebih memiliki kepercayaan Konsumen.</p>
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
                <h2 class="mb-4">Apa itu Izin Edar?</h2>
                <p>Bagi Pelaku UMKM, sangat penting memiliki Izin Edar dari BPOM atas produk, dalam hal ini pangan olahan. Sebab saat ini, Masyarakat cenderung akan meragukan produk-produk tanpa izin BPOM.</p>
                <p class="mb-0">Sertifikasi Izin Edar BPOM menjadi legalitas penting yang akan menjamin kualitas produk. Sehingga, dapat meningkatkan citra produk di mata Konsumen, juga meningkatkan daya saing di pasaran.</p>
                <hr class="my-5" />
                <h2 class="mb-4">Cara pengurusan Sertifikasi Izin Edar</h2>
                <p>
                    Pelaku/Penggiat usaha dapat melakukan registrasi online melalui situs resmi BPOM <a href="https://e-reg.pom.go.id/" target="_blank">https://e-reg.pom.go.id/</a> dengan langkah, sebagai berikut:
                    <ol>
                        <li>Isi form registrasi Perusahaan, dengan mengisi dan mengunggah data, dokumen-dokumen milik usaha serta melampirkan dokumen pendukung lainnya yang diminta oleh pihak BPOM</li>
                        <li>Tunggu evaluasi dan verifikasi dari Petugas. Setelahnya, Pendaftar akan mendapat email dari BPOM yang berisi User ID dan Password untuk mengakses kembali situs BPOM. Lalu, login menggunakan User ID dan Password tersebut</li>
                        <li>Masukkan data dan unggah dokumen pendukung yang diminta. Kemudian, klik proses</li>
                        <li>Tunggu penerbitan surat perintah bayar. Setelah terbit, silakan bayar sesuai surat perintah bayar yang telah diperoleh</li>
                        <li>Tunggu evaluasi verifikasi dan validasi dari Petugas BPOM</li>
                        <li>Setelahnya, penerbitan Izin Edar. Jika data dianggap valid, Pendaftar akan mendapatkan Nomor Izin Edar secara elektronik</li>
                    </ol>
                </p>
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

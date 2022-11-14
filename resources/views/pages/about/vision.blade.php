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
                    <h1 class="page-header-ui-title mb-3">Visi dan Misi</h1>
                    <p class="page-header-ui-text">Pandangan ke depan dan cara yang Kami jalankan agar dapat mencapainya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Vision -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Visi Kami</h2>
                <p class="mb-0">Menjadi Media Informasi yang terbaik bagi Penggiat UMKM di Kota Depok.</p>
                <hr class="my-5" />
                <h2 class="mb-4">Misi Kami</h2>
                <p>Memaksimalkan Teknologi Web sebagai media edukasi, diskusi, dan promosi secara online.</p>
                <p class="mb-0">Mengubah pola pikir Masyarakat, khususnya Penggiat UMKM untuk berani maju.</p>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Vision -->
@endsection

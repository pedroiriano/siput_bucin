@extends('layouts.frontend')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/frontend/css/styles.css') }}">
@endsection

@section('content')
<!-- BEGIN::Page Header -->
<header class="page-header-ui page-header-ui-dark bg-img-cover overlay" style="background-image: url('assets/images/banners/marketplace-banner-01.png'); height: 100vh;">
    <div class="page-header-ui-content position-relative">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <h1 class="page-header-ui-title">Selamat Datang di</h1>
                    <p class="page-header-ui-text mb-5">Situs Pengembangan Usaha Terpadu Bagi UMKM Kelurahan Pondok Cina</p>
                    @auth
                    <a class="btn btn-teal fw-500 me-2" href="{{ route('backend') }}">Masuk Sistem</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Licensing -->
<section class="bg-light py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="mb-5 text-center">
                    <div class="text-xs text-uppercase-expanded text-primary mb-2">Perizinan</div>
                    <p class="lead mb-0">Seputar Informasi dalam Perizinan UMKM.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-md-4 col-lg-3 mb-5 mb-lg-0">
                <a class="card lift" href="{{ route('production') }}">
                    <img class="card-img-top" src="{{ asset('assets/images/informations/pirt-01.png') }}" alt="Gambar Kategori" />
                    <div class="card-body text-center py-3"><h6 class="card-title mb-0">PIRT</h6></div>
                </a>
            </div>
            <div class="col-md-4 col-lg-3 mb-5 mb-lg-0">
                <a class="card lift" href="{{ route('halal') }}">
                    <img class="card-img-top" src="{{ asset('assets/images/informations/halal-01.png') }}" alt="Gambar Kategori" />
                    <div class="card-body text-center py-3"><h6 class="card-title mb-0">Sertifikasi Halal</h6></div>
                </a>
            </div>
            <div class="col-md-4 col-lg-3 mb-5 mb-lg-0">
                <a class="card lift" href="{{ route('market') }}">
                    <img class="card-img-top" src="{{ asset('assets/images/informations/edar-01.png') }}" alt="Gambar Kategori" />
                    <div class="card-body text-center py-3"><h6 class="card-title mb-0">Izin Edar</h6></div>
                </a>
            </div>
            <div class="col-md-4 col-lg-3">
                <a class="card lift" href="{{ route('trademark') }}">
                    <img class="card-img-top" src="{{ asset('assets/images/informations/haki-01.png') }}" alt="Gambar Kategori" />
                    <div class="card-body text-center py-3"><h6 class="card-title mb-0">Haki</h6></div>
                </a>
            </div>
        </div>
    </div>
    <div class="svg-border-angled text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor"><polygon points="0,100 100,0 100,100"></polygon></svg>
    </div>
</section>
<!-- END::Licensing -->

<!-- BEGIN::Information -->
<section class="bg-white pt-5 pb-10">
    <div class="container px-5">
        <div class="card mt-n15 mb-10 z-1">
            <div class="card-body p-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-12">
                        <h4>Dapatkan informasi terbaru</h4>
                        <p class="lead text-gray-500 mb-0">Tetap terhubung dengan pembaruan dan fitur terbaru yang ditambahkan ke aplikasi kami!</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="businesses" class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="mb-5 text-center">
                    <div class="text-xs text-uppercase-expanded text-primary mb-2">Bisnis Populer</div>
                    <p class="lead mb-0">Berikut adalah beberapa bisnis yang paling populer di daerah Anda.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            @foreach ($mars as $mar)
            <div class="col-lg-4 mb-5 mb-lg-0">
                <a class="card lift" href="/usaha/detail/{{ $mar->id }}">
                    <img class="card-img-top" src="/storage/photos/{{ $mar->photo }}" alt="gambar-bisnis" />
                    <div class="card-body text-center py-3">
                        <h6 class="card-title mb-0">{{ $mar->name }}</h6>
                        {{-- <div class="text-yellow">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="small mb-2">(12 Ulasan)</div> --}}
                        <div class="small">{{ $mar->address }}</div>
                    </div>
                    <div class="card-footer text-center text-xs">
                        <i class="fas fa-store-alt me-1"></i>
                        Buka {{ $mar->business_age }} yang lalu
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{ $mars->links() }}
    </div>
    <div class="svg-border-angled text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor"><polygon points="0,100 100,0 100,100"></polygon></svg>
    </div>
</section>
<!-- END::Information -->
@endsection

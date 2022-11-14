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
                    <h1 class="page-header-ui-title mb-3">Rincian Berita</h1>
                    <p class="page-header-ui-text">Dapatkan informasi Berita yang terperinci di sini.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::News Detail -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="single-post">
                    <h1>Siput Bucin mengadakan Sosialisasi promosi Produk</h1>
                    <p class="lead">Edukasi dan diskusi bermanfaat dalam mempromosikan produk UMKM agar dapat terjangkau luas kepada Konsumen.</p>
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <div class="single-post-meta me-4">
                            <img class="single-post-meta-img" src="{{ asset('assets/images/illustrations/profiles/profile-1.png') }}" />
                            <div class="single-post-meta-details">
                                <div class="single-post-meta-details-name">Admin</div>
                                <div class="single-post-meta-details-date">31 Oktober 2022</div>
                            </div>
                        </div>
                        <div class="single-post-meta-links">
                            <a href="#!"><i class="fab fa-twitter fa-fw"></i></a>
                            <a href="#!"><i class="fab fa-facebook-f fa-fw"></i></a>
                            <a href="#!"><i class="fas fa-bookmark fa-fw"></i></a>
                        </div>
                    </div>
                    <img class="img-fluid mb-2 rounded" src="{{ asset('assets/images/categories/fashion.jpg') }}" />
                    <div class="small text-gray-500 text-center">Sumber Foto: Portal Depok</div>
                    <div class="single-post-text my-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit similique distinctio quidem blanditiis architecto ullam a itaque quisquam nihil! Unde ducimus deleniti exercitationem minima, molestiae ab saepe libero. Doloribus, a?</p>
                        <p>Magnam amet labore exercitationem maxime consectetur molestias quas quia dicta, praesentium minus illum quis fuga, fugiat velit voluptate sed nostrum ipsam atque.</p>
                        <p>Quaerat voluptas natus velit deleniti reprehenderit vero ad eos ab reiciendis. Libero dignissimos temporibus ipsam sint dolores voluptate consequatur debitis tempora doloremque.</p>
                        <hr class="my-5" />
                        <div class="text-center"><a class="btn btn-transparent-dark" onclick="history.back()">Kembali ke Daftar Berita</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::News Detail -->
@endsection

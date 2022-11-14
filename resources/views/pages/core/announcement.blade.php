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
                    <h1 class="page-header-ui-title mb-3">Pengumuman</h1>
                    <p class="page-header-ui-text">Informasi peristiwa penting yang khusus Kami sajikan untuk Anda.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Announcement -->
<section class="bg-white py-10">
    <div class="container-fluid px-5">
        <div class="row gx-5">
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/hobby.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/hobby.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Buku</div></div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/medical.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/medical.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Kartu Bisnis</div></div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/tool.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/tool.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Etalase Unik</div></div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/fashion.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/fashion.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Gawai</div></div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/book.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/book.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Buku Putih</div></div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a class="card card-portfolio h-100" href="./assets/images/categories/electronic.jpg" data-lightbox="announcement">
                    <img class="card-img-top" src="./assets/images/categories/electronic.jpg" alt="..." />
                    <div class="card-body"><div class="card-title">Foto Wajah</div></div>
                </a>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-blog justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Announcement -->
@endsection

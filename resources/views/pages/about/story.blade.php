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
                    <h1 class="page-header-ui-title mb-3">Kisah Kami</h1>
                    <p class="page-header-ui-text">Sekilas sejarah dan latar belakang Kami membuat Situs Web ini.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::Story -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Berawal dari Teman dan Warga</h2>
                <p>Susahnya memulai suatu bisnis atau usaha yang memiliki izin dan sesuai dengan perkembangan kebutuhan lapisan Masyarakat sebagai Konsumen, membuat Para Penggiat UMKM sudah menyerah sebelum mencoba.</p>
                <p>Hal ini terjadi karena kurangnya informasi dan sosialisasi bagaimana cara mendapatkan izin sesuai prosedur, mulai dari PIRT, Sertifikasi Halal, dan Izin Edar.</p>
                <p class="mb-0">Selain itu banyak bisnis atau usaha yang gulung tikar karena tidak tahu keterkinian kebutuhan Konsumen karena tidak ada wadah atau media informasi atau diskusi.</p>
                <hr class="my-5" />
                <h4 class="mb-4">
                    <div class="icon-stack bg-primary text-white me-2"><i data-feather="arrow-right"></i></div>
                    Ini yang dapat Kami lakukan!
                </h4>
                <p>Memberikan informasi yang membuat Anda bisa menentukan bisnis atau usaha apa yang bisa memenuhi keinginan lapisan Konsumen saat ini, selanjutnya informasi dalam membentuk bisnis atau usaha tersebut, dan proses menjalankannya.</p>
                <p>Memberikan wadah atau media komunikasi antara Penggiat UMKM, sehingga dapat berdiskusi dalam mengembangkan bisnis atau usahanya.</p>
                <p>Dan yang terakhir adalah memberikan fasilitas media promosi online, sehingga Masyarakat sebagai Calon Konsumen dapat mengenal bisnis atau usaha serta produk yang dijualnya.</p>
                <div class="card bg-light shadow-none">
                    <div class="card-body">
                        <h6>Selanjutnya yang harus Anda lakukan!</h6>
                        <ul class="mb-0">
                            <li class="text-italic">Segeralah bergabung bersama Kami, dan jalankanlah bisnis atau usaha Anda.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<!-- END::Story -->
@endsection

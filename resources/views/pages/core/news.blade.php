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
                    <h1 class="page-header-ui-title mb-3">Berita</h1>
                    <p class="page-header-ui-text">Informasi terkini yang diberikan oleh Kami dengan cinta.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<!-- END::Page Header -->

<!-- BEGIN::News -->
<section class="bg-white py-10">
    <div class="container px-5">
        <a class="card post-preview post-preview-featured lift mb-5 overflow-hidden" href="{{ route('news_detail') }}">
            <div class="row g-0">
                <div class="col-lg-5"><div class="post-preview-featured-img" style="background-image: url('./assets/images/categories/book.jpg')"></div></div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <div class="py-5">
                            <h5 class="card-title">Berita UMKM 00001</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium nulla animi neque eaque eveniet quod labore eum a quos, iusto, mollitia aperiam adipisci laborum architecto eligendi sunt molestiae! Incidunt, vero.</p>
                        </div>
                        <hr />
                        <div class="post-preview-meta">
                            <img class="post-preview-meta-img" src="assets/images/illustrations/profiles/profile-1.png" />
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-name">Admin</div>
                                <div class="post-preview-meta-details-date">31 Oktober 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="row gx-5">
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="{{ route('news_detail') }}">
                    <img class="card-img-top" src="./assets/images/categories/electronic.jpg" alt="Gambar Berita" />
                    <div class="card-body">
                        <h5 class="card-title">Berita UMKM 00002</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, necessitatibus.</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <img class="post-preview-meta-img" src="assets/images/illustrations/profiles/profile-2.png" />
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-name">Admin</div>
                                <div class="post-preview-meta-details-date">31 Oktober 2022</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="{{ route('news_detail') }}">
                    <img class="card-img-top" src="./assets/images/categories/food-beverage.jpg" alt="Gambar Berita" />
                    <div class="card-body">
                        <h5 class="card-title">Berita UMKM 00003</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, aliquid!</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <img class="post-preview-meta-img" src="assets/images/illustrations/profiles/profile-3.png" />
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-name">Admin</div>
                                <div class="post-preview-meta-details-date">31 Oktober 2022</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="{{ route('news_detail') }}">
                    <img class="card-img-top" src="./assets/images/categories/gift.jpg" alt="Gambar Berita" />
                    <div class="card-body">
                        <h5 class="card-title">Berita UMKM 00004</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, distinctio?</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <img class="post-preview-meta-img" src="assets/images/illustrations/profiles/profile-4.png" />
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-name">Admin</div>
                                <div class="post-preview-meta-details-date">31 Oktober 2022</div>
                            </div>
                        </div>
                    </div>
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
<!-- END::News -->
@endsection

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

<!-- BEGIN::Business -->
<section class="bg-white py-10">
    <div class="container px-5">
        <div class="card post-preview post-preview-featured lift mb-5 overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-5"><div class="post-preview-featured-img" style="background-image: url('/storage/photos/{{ $mar->photo }}')"></div></div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <div class="py-5">
                            <h5 class="card-title">{{ $mar->name }}</h5>
                            <p class="card-text text-sm">
                                <ul class="text-decoration-none">
                                    <li>
                                        {{ $mar->address }}
                                    </li>
                                    <li>
                                        {{ $mar->category }}
                                    </li>
                                    <li>
                                        {{ $mar->bin }}
                                    </li>
                                    <li>
                                        {{ $mar->employees }}
                                    </li>
                                    <li>
                                        {{ $mar->phone }}
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <hr />
                        <div class="post-preview-meta">
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-name">{{ $mar->user_name }}</div>
                                <div class="post-preview-meta-details-date">Usaha telah berdiri sejak {{ $mar->business_age }} yang lalu</div>
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
<!-- END::Business -->
@endsection

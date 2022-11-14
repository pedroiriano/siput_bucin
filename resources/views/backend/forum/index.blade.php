@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('css/backend/styles.css') }}">
@endsection

@section('content')
<!-- Main Content-->
<header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="message-square"></i></div>
                        Forum
                    </h1>
                    <div class="page-header-subtitle">
                        Diskusi mengenai Komoditas Pasar.
                    </div>
                </div>
            </div>
            <div class="page-header-search mt-4">
                <div class="input-group input-group-joined">
                    <input class="form-control" type="text" placeholder="Cari Diskusi" aria-label="Search" autofocus />
                    <span class="input-group-text"><i data-feather="search"></i></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4">
    <!-- Forum threads-->
    <div class="row mb-0 mt-5">
        <h2 class="col-6 text-start">Diskusi</h2>
        <div class="col-6 text-end">
            <a class="btn btn-sm btn-primary" href="#">
                <i class="me-1" data-feather="plus"></i>
                Mulai Diskusi Baru
                <i class="ms-1" data-feather="plus"></i>
            </a>
        </div>
    </div>
    <hr class="mt-2 mb-4" />
    <!-- Forum item-->
    <a class="card card-icon lift lift-sm mb-4" href="{{ route('thread', 1) }}">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="h5 card-title mb-0">Bawang merah langka di beberapa Pasar</div>
                <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
            </div>
        </div>
    </a>
    <!-- Forum item-->
    <a class="card card-icon lift lift-sm mb-4" href="{{ route('thread', 2) }}">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="h5 card-title mb-0">Harga minyak goreng semakin naik, bagaimana cara mengatasinya?</div>
                <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
            </div>
        </div>
    </a>
    <!-- Forum item-->
    <a class="card card-icon lift lift-sm mb-4" href="{{ route('thread', 3) }}">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="h5 card-title mb-0">Keterlambatan pengiriman beberapa komoditas</div>
                <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
            </div>
        </div>
    </a>
</div>
@endsection

@section('js')
{{-- <script>
    $("#datatablesSimple").on("click", ".update-commodity-status", function() {
        var url = $(this).attr('data-url');
        $("#updateForm").attr("action", url);
    });
    $("#datatablesSimple").on("click", ".delete-commodity", function() {
        var url = $(this).attr('data-url');
        $("#deleteForm").attr("action", url);
    });
</script> --}}
@endsection

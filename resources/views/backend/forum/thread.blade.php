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
                        Diskusi
                    </h1>
                    <div class="page-header-subtitle">
                        Komentar dengan topik dan judul yang telah dipilih.
                    </div>
                </div>
            </div>
            <div class="page-header-search mt-4">
                <div class="input-group input-group-joined">
                    <input class="form-control" type="text" placeholder="Cari Komentar" aria-label="Search" autofocus />
                    <span class="input-group-text"><i data-feather="search"></i></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4">
    <!-- Discussion threads-->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <a class="btn btn-transparent-dark btn-icon" href="{{ url()->previous() }}"><i data-feather="arrow-left"></i></a>
            <div class="ms-3"><h2 class="my-3">Bawang merah langka di beberapa Pasar</h2></div>
        </div>
        <div class="card-body px-0">
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-secret fa-2x"></i>
                    <div class="ms-4">
                        <div class="small">Super Admin</div>
                        <div class="text-xs text-muted">1 Hari yang Lalu</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a href="#">Balas</a>
                </div>
            </div>
            <hr />
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user fa-2x"></i>
                    <div class="ms-4">
                        <div class="small">UPT Pasar Agung</div>
                        <div class="text-xs text-muted">3 Jam yang Lalu</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a href="#">Balas</a>
                </div>
            </div>
            <hr />
            <div class="d-flex align-items-center justify-content-between px-4">
                <textarea class="lh-base form-control" type="text" placeholder="Komentar" rows="4"></textarea>
            </div>
        </div>
    </div>
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

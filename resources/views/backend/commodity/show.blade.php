@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('css/backend/styles.css') }}">
@endsection

@section('content')
<!-- Main Content-->
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="coffee"></i></div>
                        Detail Komoditas
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    @if ((auth()->user()->role_id) == 1)
                        <a class="btn btn-sm btn-light text-primary" href="/commodity/{{ $com->id }}/edit">
                            <i class="me-1" data-feather="edit"></i>
                            Ubah
                        </a>
                        <a class="btn btn-sm btn-light text-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="me-1" data-feather="trash-2"></i>
                            Hapus
                        </a>
                    @endif
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('commodity') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Kembali ke Tabel Komoditas
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-fluid px-4">
    @include('inc.alert-message')
    <div class="card">
        <div class="card-body">
            <div class="small text-muted mb-2 fw-bolder text-uppercase">Komoditas</div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms-0">
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                ID Komoditas
                            </div>
                            <div class="col-9">
                                {{ $com->id }}
                            </div>
                        </div>
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                Nama Komoditas
                            </div>
                            <div class="col-9">
                                {{ $com->name }}
                            </div>
                        </div>
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                Nama Kategori
                            </div>
                            <div class="col-9">
                                {{ $com->category_name }}
                            </div>
                        </div>
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                Asal Komoditas
                            </div>
                            <div class="col-9">
                                {{ $com->origin }}
                            </div>
                        </div>
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                Kualitas Komoditas
                            </div>
                            <div class="col-9">
                                {{ $com->quality }}
                            </div>
                        </div>
                        <div class="row small text-muted fw-bold">
                            <div class="col-3">
                                Status Halaman Depan
                            </div>
                            <div class="col-9">
                                {{ $com->front_status }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">Hapus Data</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Yakin Ingin Menghapus Data?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                    Tidak
                </button>
                <form action="{{ route('commodity-delete', $com->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">
                        <a class="text-decoration-none text-white">
                            Ya
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

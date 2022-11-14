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
                        <div class="page-header-icon"><i data-feather="file-plus"></i></div>
                        Tambah Kebijakan
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('policy') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Kembali ke Tabel Kebijakan
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<form action="#" method="POST" enctype="multipart/form-data">
@csrf
<div class="container-fluid px-4">
    @include('inc.alert-message')
    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">Komoditas</div>
                <div class="card-body">
                    <select class="form-control" id="commodity" name="commodity">
                        {{-- @if (count($coms) > 0)
                            @foreach ($coms as $com) --}}
                                <option value="12">Daging Sapi</option>
                            {{-- @endforeach
                        @endif --}}
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Kebijakan</div>
                <div class="card-body">
                    <input class="form-control" id="policy" name="policy" type="text" placeholder="Judul Kebijakan (contoh: Cek Pasokan Komoditas)" />
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Deskripsi</div>
                <div class="card-body">
                    <textarea class="lh-base form-control" id="description" name="description" type="text" placeholder="Deskripsi Kebijakan (contoh: Melakukan Pengecekan Komoditas di seluruh Pasar, Telusuri Masalah Stok dan Transportasinya, serta masalah lainnya)" rows="4"></textarea>
                </div>
            </div>
        </div>
        <!-- Sticky Navigation-->
        <div class="col-lg-4">
            <div class="nav-sticky">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Aksi
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left" title="Tombol Ulang untuk mengosongkan formulir isian, sedangkan tombol Simpan untuk menyimpan data."></i>
                    </div>
                    <div class="card-body">
                        <div class="d-grid mb-3"><button type="reset" class="fw-500 btn btn-primary-soft text-primary">Ulang</button></div>
                        <div class="d-grid"><button type="submit" class="fw-500 btn btn-primary">Simpan</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

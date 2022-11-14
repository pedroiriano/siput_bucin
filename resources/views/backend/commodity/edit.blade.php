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
                        Ubah Komoditas
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
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
<form action="{{ route('commodity-update', $com->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="container-fluid px-4">
    @include('inc.alert-message')
    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <select class="form-control" id="category" name="category">
                        @if (count($cats) > 0)
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $com->category_id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Komoditas</div>
                <div class="card-body"><input class="form-control" id="commodity" name="commodity" type="text" placeholder="Masukkan Nama Komoditas (contoh: Daging Sapi Has Dalam)" value="{{ $com->name }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Asal</div>
                <div class="card-body">
                    <select class="form-control" id="origin" name="origin">
                        <option value="Lokal" {{ $com->origin == 'Lokal' ? 'selected' : '' }}>
                            Lokal
                        </option>
                        <option value="Impor" {{ $com->origin == 'Impor' ? 'selected' : '' }}>
                            Impor
                        </option>
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Kualitas</div>
                <div class="card-body">
                    <select class="form-control" id="quality" name="quality">
                        <option value="Biasa" {{ $com->quality == 'Biasa' ? 'selected' : '' }}>
                            Biasa
                        </option>
                        <option value="Medium" {{ $com->quality == 'Medium' ? 'selected' : '' }}>
                            Medium
                        </option>
                        <option value="Premium" {{ $com->quality == 'Premium' ? 'selected' : '' }}>
                            Premium
                        </option>
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Status Halaman Depan</div>
                <div class="card-body">
                    <select class="form-control" id="status" name="status">
                        <option value="Ya" {{ $com->front_status == 'Ya' ? 'selected' : '' }}>
                            Ya
                        </option>
                        <option value="Tidak" {{ $com->front_status == 'Tidak' ? 'selected' : '' }}>
                            Tidak
                        </option>
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Foto</div>
                <div class="card-body">
                    <input class="form-control" id="photo" name="photo" type="file" />
                    {{ $com->photo }}
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

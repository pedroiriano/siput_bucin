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
                        Perbarui Harga
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('price') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Kembali ke Tabel Harga
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<form action="{{ route('price-update', $pri->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="container-fluid px-4">
    @include('inc.alert-message')
    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">Tanggal</div>
                <div class="card-body">
                    <div class="input-group input-group-joined">
                        <span class="input-group-text"><i data-feather="calendar"></i></span>
                        <input class="form-control ps-0 pointer" id="litepickerSingleDate" name="date" placeholder="Pilih Tanggal" value="{{ $pri->date }}" />
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Pasar</div>
                <div class="card-body">
                    @if ((auth()->user()->role_id) == 1)
                        <select class="form-control" id="market" name="market">
                            @if (count($mars) > 0)
                                @foreach ($mars as $mar)
                                    <option value="{{ $mar->id }}" {{ $mar->id == $pri->market_id ? 'selected' : '' }}>
                                        {{ $mar->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    @else
                        <input class="form-control" id="market" name="market" type="text" value="{{ $nmar }}" disabled />
                        <input name="market" type="hidden" value="{{ auth()->user()->market_id }}" />
                    @endif
                </div>
            </div>
            <!-- SELECT CONCAT(commodity, " ", origin, " ", quality) AS Address FROM commodities;-->
            <div class="card mb-4">
                <div class="card-header">Komoditas</div>
                <div class="card-body">
                    <select class="form-control" id="commodity" name="commodity">
                        @if (count($coms) > 0)
                            @foreach ($coms as $com)
                                <option value="{{ $com->id }}" {{ $com->id == $pri->commodity_id ? 'selected' : '' }}>
                                    {{ $com->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Harga</div>
                <div class="card-body">
                    <input class="form-control" id="price" name="price" type="number" placeholder="Masukkan Harga Komoditas (contoh: 155000)" value="{{ $pri->price }}" />
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

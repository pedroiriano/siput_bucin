@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/backend/css/styles.css') }}">
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
                        Tambah Toko
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('store') }}">
                        <i class="me-1" data-feather="arrow-left"></i>
                        Kembali ke Tabel Toko
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<form action="{{ route('store-store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="container-fluid px-4">
    @include('includes.alert-message')
    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">Toko</div>
                <div class="card-body"><input class="form-control" id="market" name="market" type="text" placeholder="Masukkan Nama Toko (contoh: Toko Agung Depok)" value="{{ old('market') }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header"><label for="address" class="form-label">Alamat</label></div>
                <textarea class="form-control" aria-label="Alamat Toko (contoh: Jl. Margonda Raya No. 1)" placeholder="Masukkan Alamat Toko" id="address" name="address" style="height: 100px">{{ old('address') }}</textarea>
            </div>
            @if ((auth()->user()->role_id) == 1)
            <div class="card mb-4">
                <div class="card-header">Pemilik</div>
                <div class="card-body">
                    <select class="form-control" id="usrs" name="usrs">
                        @if (count($usrs) > 0)
                            @foreach ($usrs as $usr)
                                <option value="{{ $usr->id }}">{{ $usr->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">Logo</div>
                <div class="card-body"><input class="form-control" id="logo" name="logo" type="file" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Kategori</div>
                <div class="card-body"><input class="form-control" id="category" name="category" type="text" placeholder="Masukkan Kategori Usaha (contoh: Jasa Binatu)" value="{{ old('category') }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Nomor Induk Berusaha (NIB)</div>
                <div class="card-body"><input class="form-control" id="bin" name="bin" type="text" placeholder="Masukkan NIB (contoh: 123456789)" value="{{ old('bin') }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Lama Usaha</div>
                <div class="card-body"><input class="form-control" id="ba" name="ba" type="text" placeholder="Lamanya Usaha yang Diajalankan (contoh: 3 Tahun)" value="{{ old('ba') }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Jumlah Karyawan</div>
                <div class="card-body"><input class="form-control" id="employee" name="employee" type="number" placeholder="Masukkan Jumlah Karyawan (contoh: 33)" value="{{ old('employee') }}" /></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Nomor Telepon</div>
                <div class="card-body"><input class="form-control" id="phone" name="phone" type="text" placeholder="Nomor Telepon/HP (contoh: 08999999999)" value="{{ old('phone') }}" /></div>
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

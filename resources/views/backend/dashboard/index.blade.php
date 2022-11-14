@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('css/backend/styles.css') }}">
@endsection

@section('content')
<!-- Main Content-->
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Dasbor Komoditas Pasar
                    </h1>
                    <div class="page-header-subtitle">Data Statistik dan Informasi yang Telah Diolah Mengenai Komoditas Pasar</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-xxl-4 col-xl-12 mb-4">
            <div class="card h-100">
                <div class="card-body h-100 p-5">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-xxl-12">
                            <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                <h1 class="text-primary">Selamat Datang di Aplikasi REWAS</h1>
                                <p class="text-gray-700 mb-0">Manajemen Data dan Sistem Pengawasan Harga Komoditas Pasar Kota Depok</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="{{ asset('css/assets/img/illustrations/at-work.svg') }}" style="max-width: 26rem" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Colored Cards for Dashboard Demo-->
    <div class="row">
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Total Komoditas</div>
                            <div class="text-lg fw-bold">{{ $comCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="package"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="{{ route('commodity') }}">Selengkapnya</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Jumlah Pasar</div>
                            <div class="text-lg fw-bold">{{ $marCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="map"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="{{ route('market') }}">Selengkapnya</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Kenaikan Signifikan</div>
                            <div class="text-lg fw-bold">45%</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="{{ route('home').'#commodity-price' }}">Selengkapnya</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Keterkinian Data</div>
                            <div class="text-lg fw-bold">89%</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="clock"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#">Selengkapnya</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

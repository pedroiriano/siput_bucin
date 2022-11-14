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
                        Analisis Komoditas Pasar
                    </h1>
                    <div class="page-header-subtitle">Analisis Data Komoditas Pasar</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    @include('inc.alert-message')
    <div class="row">
        <div class="col-xxl-8">
            <!-- Tabbed dashboard card example-->
            <div class="card mb-4">
                <div class="card-header border-bottom">
                    <!-- Dashboard card navigation-->
                    <ul class="nav nav-tabs card-header-tabs" id="dashboardNav" role="tablist">
                        @if ($pill == 1)
                            <li class="nav-item me-1">
                                <a class="nav-link active" id="weekly-pill" href="#weekly" data-bs-toggle="tab" role="tab" aria-controls="weekly" aria-selected="true">
                                    Mingguan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-pill" href="#monthly" data-bs-toggle="tab" role="tab" aria-controls="monthly" aria-selected="false">
                                    Bulanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="yearly-pill" href="#yearly" data-bs-toggle="tab" role="tab" aria-controls="yearly" aria-selected="false">
                                    Tahunan
                                </a>
                            </li>
                        @elseif ($pill == 2)
                            <li class="nav-item me-1">
                                <a class="nav-link" id="weekly-pill" href="#weekly" data-bs-toggle="tab" role="tab" aria-controls="weekly" aria-selected="false">
                                    Mingguan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="monthly-pill" href="#monthly" data-bs-toggle="tab" role="tab" aria-controls="monthly" aria-selected="true">
                                    Bulanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="yearly-pill" href="#yearly" data-bs-toggle="tab" role="tab" aria-controls="yearly" aria-selected="false">
                                    Tahunan
                                </a>
                            </li>
                        @elseif ($pill == 3)
                            <li class="nav-item me-1">
                                <a class="nav-link" id="weekly-pill" href="#weekly" data-bs-toggle="tab" role="tab" aria-controls="weekly" aria-selected="false">
                                    Mingguan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-pill" href="#monthly" data-bs-toggle="tab" role="tab" aria-controls="monthly" aria-selected="false">
                                    Bulanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="yearly-pill" href="#yearly" data-bs-toggle="tab" role="tab" aria-controls="yearly" aria-selected="true">
                                    Tahunan
                                </a>
                            </li>
                        @else
                            <li class="nav-item me-1">
                                <a class="nav-link active" id="weekly-pill" href="#weekly" data-bs-toggle="tab" role="tab" aria-controls="weekly" aria-selected="true">
                                    Mingguan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-pill" href="#monthly" data-bs-toggle="tab" role="tab" aria-controls="monthly" aria-selected="false">
                                    Bulanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="yearly-pill" href="#yearly" data-bs-toggle="tab" role="tab" aria-controls="yearly" aria-selected="false">
                                    Tahunan
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body">
                    @if ($pill == 1)
                        <div class="tab-content" id="dashboardNavContent">
                            <div class="tab-pane fade show active" id="weekly" role="tabpanel" aria-labelledby="weekly-pill">
                                @include('inc.chart.weekly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="weeklyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-pill">
                                @include('inc.chart.monthly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="monthlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-pill">
                                @include('inc.chart.yearly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="yearlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                    @elseif ($pill == 2)
                        <div class="tab-content" id="dashboardNavContent">
                            <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-pill">
                                @include('inc.chart.weekly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="weeklyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-pill">
                                @include('inc.chart.monthly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="monthlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-pill">
                                @include('inc.chart.yearly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="yearlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                    @elseif ($pill == 3)
                        <div class="tab-content" id="dashboardNavContent">
                            <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-pill">
                                @include('inc.chart.weekly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="weeklyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-pill">
                                @include('inc.chart.monthly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="monthlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="yearly" role="tabpanel" aria-labelledby="yearly-pill">
                                @include('inc.chart.yearly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="yearlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-content" id="dashboardNavContent">
                            <div class="tab-pane fade show active" id="weekly" role="tabpanel" aria-labelledby="weekly-pill">
                                @include('inc.chart.weekly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="weeklyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-pill">
                                @include('inc.chart.monthly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="monthlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-pill">
                                @include('inc.chart.yearly-single')
                                <div class="chart-bar mb-4 mb-lg-0" style="height: 20rem">
                                    <canvas id="yearlyBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if ($pill == 1)
    @include('inc.chart.weekly-single-js')
@elseif ($pill == 2)
    @include('inc.chart.monthly-single-js')
@elseif ($pill == 3)
    @include('inc.chart.yearly-single-js')
@else
    @include('inc.chart.weekly-single-js')
@endif
@endsection

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
                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                        Tabel Kebijakan
                    </h1>
                    <div class="page-header-subtitle">Data Utama Kebijakan</div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    @include('inc.alert-message')
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-start">
                    Kebijakan
                </div>
                @if ((auth()->user()->role_id) == 1)
                    <div class="col-6 text-end">
                        <a class="btn btn-sm btn-light text-primary" href="#">
                            <i class="me-1" data-feather="plus"></i>
                            Tambah Kebijakan
                            <i class="ms-1" data-feather="plus"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Kebijakan</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Kebijakan</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if ((auth()->user()->role_id) == 1)
                        @if (count($pols) > 0)
                            @foreach ($pols as $pol)
                                <tr>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="#">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="#">
                                                <i data-feather="edit"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2 delete-policy" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="#">
                                            <a class="text-decoration-none text-muted">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="3" class="text-center">Data Masih Kosong</td>
                        </tr>
                        @endif
                    @elseif ((auth()->user()->role_id) == 2)
                        {{-- @if (count($pols) > 0)
                            @foreach ($pols as $pol) --}}
                                <tr>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="#">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            {{-- @endforeach
                        @else
                        <tr>
                            <td colspan="3" class="text-center">Data Masih Kosong</td>
                        </tr>
                        @endif --}}
                    @else
                        
                    @endif
                </tbody>
            </table>
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

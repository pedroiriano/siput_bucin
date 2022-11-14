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
                        Tabel Harga Komoditas
                    </h1>
                    <div class="page-header-subtitle">Data Utama Harga Komoditas</div>
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
                    Harga Komoditas
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-sm btn-light text-primary" href="{{ route('price-form') }}">
                        <i class="me-1" data-feather="plus"></i>
                        Perbarui Harga Komoditas
                        <i class="ms-1" data-feather="plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Komoditas</th>
                        <th class="text-center">Pasar</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Komoditas</th>
                        <th class="text-center">Pasar</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if ((auth()->user()->role_id) == 1)
                        @if (count($pris) > 0)
                            @foreach ($pris as $pri)
                                <tr>
                                    <td>{{ $pri->id }}</td>
                                    <td>{{ $pri->commodity_name }}</td>
                                    <td>{{ $pri->market_name }}</td>
                                    <td>{{ $pri->price }}</td>
                                    <td>{{ $pri->date }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/price/{{ $pri->id }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/price/{{ $pri->id }}/edit">
                                                <i data-feather="edit"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
                        @if (count($pris) > 0)
                            @foreach ($pris as $pri)
                                <tr>
                                    <td>{{ $pri->id }}</td>
                                    <td>{{ $pri->commodity_name }}</td>
                                    <td>{{ $pri->market_name }}</td>
                                    <td>{{ $pri->price }}</td>
                                    <td>{{ $pri->date }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/price/{{ $pri->id }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/price/{{ $pri->id }}/edit">
                                                <i data-feather="edit"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2 delete-price" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="{{ route('price-delete', $pri->id) }}">
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
                    @else
                        
                    @endif
                </tbody>
            </table>
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
                <form action="" method="POST" id="deleteForm">
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

@section('js')
<script>
    $("#datatablesSimple").on("click", ".delete-price", function() {
        var url = $(this).attr('data-url');
        $("#deleteForm").attr("action", url);
    });
</script>
@endsection

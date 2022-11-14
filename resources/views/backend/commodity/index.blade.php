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
                        Tabel Komoditas
                    </h1>
                    <div class="page-header-subtitle">Data Utama Komoditas</div>
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
                    Komoditas
                </div>
                @if ((auth()->user()->role_id) == 1)
                    <div class="col-6 text-end">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('commodity-form') }}">
                            <i class="me-1" data-feather="plus"></i>
                            Tambah Komoditas
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
                        <th class="text-center">Komoditas</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Asal</th>
                        <th class="text-center">Kualitas</th>
                        <th class="text-center">Tampil</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Komoditas</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Asal</th>
                        <th class="text-center">Kualitas</th>
                        <th class="text-center">Tampil</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if ((auth()->user()->role_id) == 1)
                        @if (count($coms) > 0)
                            @foreach ($coms as $com)
                                <tr>
                                    <td>{{ $com->id }}</td>
                                    <td>{{ $com->name }}</td>
                                    <td>{{ $com->category_name }}</td>
                                    <td>{{ $com->origin }}</td>
                                    <td>{{ $com->quality }}</td>
                                    <td>
                                        @if (($com->front_status) == 'Tidak')
                                            <button class="btn btn-danger btn-xs update-commodity-status" type="button" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-url="{{ route('commodity-status', $com->id) }}">
                                                {{ $com->front_status }}
                                            </button>
                                        @endif
                                        @if (($com->front_status) == 'Ya')
                                            <button class="btn btn-success btn-xs update-commodity-status" type="button" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-url="{{ route('commodity-status', $com->id) }}">
                                                {{ $com->front_status }}
                                            </button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/commodity/{{ $com->id }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/commodity/{{ $com->id }}/edit">
                                                <i data-feather="edit"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2 delete-commodity" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="{{ route('commodity-delete', $com->id) }}">
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
                        @if (count($coms) > 0)
                            @foreach ($coms as $com)
                                <tr>
                                    <td>{{ $com->id }}</td>
                                    <td>{{ $com->name }}</td>
                                    <td>{{ $com->category_name }}</td>
                                    <td>{{ $com->origin }}</td>
                                    <td>{{ $com->quality }}</td>
                                    <td>
                                        @if (($com->front_status) == 'Tidak')
                                            <button class="btn btn-danger btn-xs update-commodity-status" type="button">
                                                {{ $com->front_status }}
                                            </button>
                                        @endif
                                        @if (($com->front_status) == 'Ya')
                                            <button class="btn btn-success btn-xs update-commodity-status" type="button">
                                                {{ $com->front_status }}
                                            </button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark ms-2 me-2">
                                            <a class="text-decoration-none text-muted" href="/commodity/{{ $com->id }}">
                                                <i data-feather="eye"></i>
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
<!-- Update Status Modal -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="updateStatusModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStatusModalTitle">Ubah Status Tampil Halaman Depan</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Mengubah Data Status Menjadi?</div>
            <div class="modal-footer">
                <form action="" method="POST" id="updateForm">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success" name="status" value="Ya">
                        <a class="text-decoration-none text-white">
                            Ya
                        </a>
                    </button>
                    <button type="submit" class="btn btn-danger" name="status" value="Tidak">
                        <a class="text-decoration-none text-white">
                            Tidak
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
    $("#datatablesSimple").on("click", ".update-commodity-status", function() {
        var url = $(this).attr('data-url');
        $("#updateForm").attr("action", url);
    });
    $("#datatablesSimple").on("click", ".delete-commodity", function() {
        var url = $(this).attr('data-url');
        $("#deleteForm").attr("action", url);
    });
</script>
@endsection

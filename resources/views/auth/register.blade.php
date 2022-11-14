@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/backend/css/styles.css') }}">
@endsection

@section('content')
<main class="form-signin">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <a href="{{ route('home') }}">
            <img class="mb-4" src="{{ asset('assets/images/favicon.png') }}" alt="" width="50">
        </a>
        <h1 class="h3 mb-3 fw-normal">{{ __('Silakan Daftar') }}</h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Pengguna" value="{{ old('name') }}" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Petunjuk:</em> isilah Nama Pengguna yang mudah <u>tanpa menggunakan</u> <b>Tanda Baca atau Karakter Spesial</b>" required autocomplete="name" autofocus>
            <label for="name">{{ __('Nama Pengguna') }}</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Alamat Email" value="{{ old('email') }}" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Petunjuk:</em> isilah Alamat Email <u>dengan format</u> <b>contoh@contoh.com</b>" required autocomplete="email">
            <label for="email">{{ __('Alamat Email') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder="Kata Sandi" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Petunjuk:</em> isilah Kata Sandi <u>dengan</u> <b>Minimal 9 Karakter</b>" required autocomplete="new-password">
            <label for="password">{{ __('Kata Sandi') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Ulangi Kata Sandi" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Petunjuk:</em> ulangi Kata Sandi <u>seperti di atas</u> <b>Minimal 9 Karakter</b>" required autocomplete="new-password">
            <label for="password-confirm">{{ __('Ulangi Kata Sandi') }}</label>
        </div>
        <input type="hidden" id="roleId" name="roleId" value="2">
        <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Daftar') }}</button>
        <a class="btn btn-link" href="{{ route('login') }}">{{ __('Sudah Punya Akun?') }}</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2019–2021</p>
    </form>
</main>
@endsection

@section('js')
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.meta')
    @include('includes.auth-css')
    @yield('css')
</head>
<body class="text-center">
    @guest
        @yield('content')
    @endguest
    
    @auth
        <script>history.back()</script>
    @endauth
</body>
@include('includes.bootstrap-bundle-js')
@yield('js')
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.meta')
    @yield('css')
</head>
<body class="nav-fixed">
    @auth
        @include('includes.backend-nav')
        <div id="layoutSidenav">
            @include('includes.backend-sidenav')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('includes.backend-footer')
            </div>
        </div>
    @endauth

    @guest
        <script>history.back()</script>
    @endguest
</body>
@include('includes.bootstrap-bundle-js')
@include('includes.backend-js')
@yield('js')
</html>

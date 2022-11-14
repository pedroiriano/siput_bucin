<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.meta')
    @yield('css')
</head>
<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                @include('includes.frontend-nav')
                @yield('content')
            </main>
        </div>
        @include('includes.frontend-footer')
    </div>
</body>
@include('includes.bootstrap-bundle-js')
@include('includes.frontend-js')
</html>

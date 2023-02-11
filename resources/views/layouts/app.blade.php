<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Bundle -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <title>E-Grocery - @yield('title')</title>
</head>
<body>
    <div id="app">
        <main class="d-flex flex-column min-vh-100" style="background-color: #E3F6FF;">
            @yield('navbar')
            @yield('content')
            @yield('footer')
        </main>

        {{-- Notification --}}
        @if(Session::has('success'))
            @include('components.success-notification', ['content' => 'success'])
        @elseif(Session::has('error'))
            @include('components.error-notification', ['content' => 'error'])
        @endif
    </div>
</body>
<!-- Custom script -->
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    let alert = document.getElementById('toast-alert');
    if(alert){
        alert = new bootstrap.Toast(alert);
        alert.show();
    }
</script>
</html>
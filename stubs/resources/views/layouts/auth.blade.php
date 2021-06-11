<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    <title>{{ config('app.name', 'Laravel FortifyUI-Bootstrap') }}</title>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
<div class="flex-fill d-flex flex-column justify-content-center">
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="{{ asset('static/logo.svg') }}" height="36" alt="">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ __('auth.error') }}: {{ $errors->first() }}
            </div>
        @endif
        @yield('content')
    </div>
</div>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title.' - '.config('app.name') ?? 'Laravel' }}</title>

    <!-- Styles -->
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive-widths.min.css') }}">
</head>

<body>
    <main>
        <section class="min-vh-100 mt-lg-0 bg-soft d-flex align-items-center justify-content-center">
            {{ $slot }}
        </section>
    </main>
</body>

</html>

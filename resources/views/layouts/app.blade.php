<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $title ?? '' }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">

    <link href="{{ asset('fa/css/all.css') }}"" rel=" stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased w-100">
    <div class="flex flex-col min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="flex-grow max-w-screen-lg m-auto my-5 px-4 lg:px-0 font-opensans">
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </div>
</body>

</html>

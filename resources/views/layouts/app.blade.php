<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $title ?? '' }} - {{ config('app.name', 'Harmony Music Store') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#7c3aed">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('fa/css/all.css') }}" rel=" stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{ $scripts ?? "" }}
</head>

<body class="font-sans antialiased w-100">
    <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-truegray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="flex-grow max-w-screen-lg m-auto my-5 px-4 sm:px-6 lg:px-8 font-opensans">
            {{ $slot }}
        </main>

        @if (Session::has('cartsuccess'))
            <x-cart-success-alert></x-cart-success-alert>
        @endif

        @include('layouts.footer')
    </div>
</body>

</html>

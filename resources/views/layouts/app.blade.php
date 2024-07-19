<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
        <header>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-button');
        const offcanvasMenu = document.getElementById('offcanvas-menu');

        menuButton.addEventListener('click', () => {
            offcanvasMenu.classList.toggle('open');
        });

        closeButton.addEventListener('click', () => {
            offcanvasMenu.classList.remove('open');
        });

        window.addEventListener('click', (e) => {
            if (e.target === offcanvasMenu) {
                offcanvasMenu.classList.remove('open');
            }
        });
    </script>
    @livewireScripts
</body>
</html>

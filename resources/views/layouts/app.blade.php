<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LumiMate</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        {{-- Bodoni Moda --}}
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600;700&display=swap" rel="stylesheet">

        {{-- Inter --}}
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    </head>
    <body class="bg-[#FAFAFC] text-[#3A3A3A] font-['Inter']">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            @include('partials.sidebar')

            <!-- Main Content -->
            <div class="flex flex-col flex-1 overflow-hiden">

                {{-- Navbar --}}
                @include('partials.navbar')

                {{-- Page Content --}}
                <main class="flex-1 overflow-y-auto px-10 py-8">
                    @yield('content')
                </main>

                {{-- Footer --}}
                @include('partials.footer')

            </div>

        </div>
    </body>
</html>

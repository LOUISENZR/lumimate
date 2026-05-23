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

<body x-data="{ sidebarOpen: true }" class="bg-[#FAFAFC] text-[#3A3A3A] font-['Inter']">

    <div class="flex min-h-screen">
        {{-- SIDEBAR --}}
        <aside x-show="sidebarOpen" x-transition class="shrink-0">
            @include('partials.sidebar')
        </aside>

        {{-- BUTTON OPEN (hanya muncul saat sidebar tertutup) --}}
        <button
            x-show="!sidebarOpen"
            @click="sidebarOpen = true"
            class="fixed top-6 left-6 z-50 w-9 h-9 rounded-xl border border-[#E8E1D8]
                   bg-[#FBF8F4] flex items-center justify-center hover:bg-[#F3EEE8]
                   transition-all duration-300 shadow-sm"
        >
            ☰
        </button>

        {{-- MAIN --}}
        <div class="flex flex-col flex-1 overflow-hidden ">


            {{-- NAVBAR --}}
            @include('partials.navbar')

            {{-- CONTENT --}}
            <main class="flex-1 overflow-y-auto px-10 py-8">
                @yield('content')
            </main>

            {{-- FOOTER --}}
            @include('partials.footer')

        </div>

    </div>

</body>
</html>
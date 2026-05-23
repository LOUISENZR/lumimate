<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LumiMate</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="font-['Inter'] min-h-screen">

    <div class="grid grid-cols-2 w-full min-h-screen">

        {{-- LEFT SIDE --}}
        <div class="relative overflow-hidden flex flex-col justify-between px-16 py-12"
             style="background: linear-gradient(to right, #F5EFF8, #C4B0E0">

            {{-- Content --}}
            <div class="relative z-10">
                <h1 class="text-[26px] text-[#4A3B6B] font-semibold font-['Bodoni_Moda'] tracking-wide">
                    LumiMate
                </h1>
            </div>

            {{-- Hero Text --}}
            <div class="relative z-10 max-w-[480px]">

                <h2 class="text-[80px] leading-[0.92] tracking-[-3px] text-[#3B2F5E] font-bold font-['Bodoni_Moda']">
                    Brave<br>
                    Sensuality.
                </h2>

                <p class="mt-6 text-[17px] leading-relaxed text-[#5C5070] font-light max-w-[360px]">
                    Redefining self-care as a sacred ritual.
                    Enter a world where technology meets
                    the tactile soul of skincare.
                </p>

                <div class="mt-8 border-l-2 border-[#6B5A8E]/40 pl-5">
                    <p class="uppercase tracking-[4px] text-xs text-[#6B5A8E] font-semibold">
                        The Ritual Dashboard
                    </p>
                    <p class="mt-2 text-[#5C5070]/80 italic text-base">
                        "Your skin is a story. We help you curate it."
                    </p>
                </div>

            </div>

            {{-- Spacer --}}
            <div class="relative z-10 h-10"></div>

        </div>

        {{-- RIGHT SIDE --}}
        <div class="flex items-center justify-center bg-[#FAF7F5] px-16 py-12">

            <div class="w-full max-w-[460px]">

                {{-- Tabs --}}
                <div class="flex gap-8 border-b border-[#E0D9D0] pb-0 mb-10">

                <a
                    href="{{ route('login') }}"
                    class="text-[#4A3B6B] text-sm tracking-[2px] uppercase pb-4 border-b-2 border-[#4A3B6B] font-medium"
                >
                    Login
                </a>

                <a
                    href="{{ route('register') }}"
                    class="text-[#9E9692] text-sm tracking-[2px] uppercase pb-4 border-b-2 border-transparent font-medium"
                >
                    Register
                </a>

                </div>

                {{-- Heading --}}
                <div class="mb-8">
                    <h1 class="text-[56px] leading-none tracking-[-2px] text-[#1E1A24] font-bold font-['Bodoni_Moda']">
                        Welcome Back
                    </h1>
                    <p class="mt-4 text-[17px] text-[#7A7480]">
                        Resume your skin ritual journey.
                    </p>
                </div>

                {{-- Slot --}}
                {{ $slot }}

                {{-- Footer --}}
                <div class="flex items-center justify-between mt-10 text-sm text-[#B0AAA4]">
                    <p>LUMIMATE © 2026</p>
                    <div class="flex gap-5">
                        <a href="#" class="hover:text-[#4A3B6B] transition-colors">Help</a>
                        <a href="#" class="hover:text-[#4A3B6B] transition-colors">Privacy</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
</html>
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

<body class="font-['Inter'] bg-[#FAF7F5] text-[#1E1A24]">

    {{-- NAVBAR --}}
    <nav class="flex items-center justify-between px-16 py-6 bg-[#FAF7F5]">

        <a href="/" class="text-[22px] font-semibold font-['Bodoni_Moda'] text-[#4A3B6B] tracking-wide">
            LumiMate
        </a>

        <div class="flex items-center gap-10">
            <a href="#" class="text-sm text-[#4A3B6B] border-b-2 border-[#4A3B6B] pb-0.5 font-medium">Rituals</a>
            <a href="#" class="text-sm text-[#7A7480] hover:text-[#4A3B6B] transition-colors">Botanicals</a>
            <a href="#" class="text-sm text-[#7A7480] hover:text-[#4A3B6B] transition-colors">Journal</a>
            <a href="#" class="text-sm text-[#7A7480] hover:text-[#4A3B6B] transition-colors">Archive</a>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('login') }}" class="text-[#7A7480] hover:text-[#4A3B6B] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </a>
            <a href="{{ route('register') }}"
               class="bg-[#4A3B6B] text-white text-xs font-semibold uppercase tracking-widest px-5 py-2.5 rounded-full hover:bg-[#66558E] transition-colors">
                Get Started
            </a>
        </div>

    </nav>

    {{-- HERO --}}
    <section class="flex flex-col items-center justify-center text-center px-16 pt-20 pb-28">

        <p class="uppercase tracking-[4px] text-xs text-[#9B8EC4] font-semibold mb-6">
            Brave Sensuality
        </p>

        <h1 class="font-['Bodoni_Moda'] text-[72px] leading-[1.05] tracking-[-2px] text-[#1E1A24] max-w-[800px]">
            Your Skin's <em class="text-[#4A3B6B] not-italic italic">Intelligence</em>,<br>
            Transformed into Ritual.
        </h1>

        <p class="mt-6 text-[17px] text-[#7A7480] font-light max-w-[520px] leading-relaxed">
            A personalized sanctuary where AI meets alchemy. Harmonize your ingredients,
            predict conflicts, and cultivate a routine as unique as your reflection.
        </p>

        <div class="flex items-center gap-4 mt-10">
            <a href="{{ route('register') }}"
               class="bg-[#4A3B6B] text-white text-sm font-medium px-8 py-3.5 rounded-full hover:bg-[#66558E] transition-colors">
                Begin Your Ritual
            </a>
            <a href="{{ route('login') }}"
               class="border border-[#C9B8E8] text-[#4A3B6B] text-sm font-medium px-8 py-3.5 rounded-full hover:bg-[#EDE6F5] transition-colors">
                Login to Archive
            </a>
        </div>

    </section>

    {{-- WISDOM SECTION --}}
    <section class="grid grid-cols-2 gap-16 px-16 py-20 bg-[#F3EEE8]">

        <div class="flex flex-col justify-center">

            <h2 class="font-['Bodoni_Moda'] text-[48px] leading-tight tracking-[-1.5px] text-[#1E1A24] mb-6">
                The Wisdom in the Layers.
            </h2>

            <p class="text-[16px] text-[#7A7480] font-light leading-relaxed mb-10">
                LumiMate isn't a tracker, it's a companion. We look beyond the surface to understand the chemistry of your care.
            </p>

            <div class="flex flex-col gap-6">

                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 flex items-center justify-center mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#9B8EC4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-[#4A3B6B] uppercase tracking-[2px] mb-1">Botanical Integrity</p>
                        <p class="text-[15px] text-[#7A7480] font-light leading-relaxed">
                            Every ingredient analysed for its pure scientific association.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 flex items-center justify-center mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#9B8EC4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-[#4A3B6B] uppercase tracking-[2px] mb-1">Scientific Foresight</p>
                        <p class="text-[15px] text-[#7A7480] font-light leading-relaxed">
                            AI-driven conflict detection before you even open a jar.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        {{-- PRODUCT IMAGE --}}
        <div class="flex items-center justify-center">
            <div class="w-full max-w-[420px] aspect-square bg-[#E8DEF5] rounded-3xl flex items-center justify-center">
                <p class="text-[#9B8EC4] text-sm">
                    <img src="{{ asset('images/Photo-landingpage.jpg') }}"
                    alt="LumiMate Product"
                    class="w-full max-w-[420px] aspect-square object-cover rounded-3xl">
                </p>
            </div>
        </div>

    </section>

    {{-- CORE PILLARS --}}
    <section class="px-16 py-24 text-center">

        <h2 class="font-['Bodoni_Moda'] text-[48px] tracking-[-1.5px] text-[#1E1A24] mb-3">
            Core Pillars of Luminosity.
        </h2>
        <div class="w-12 h-0.5 bg-[#C9B8E8] mx-auto mb-16"></div>

        <div class="grid grid-cols-4 gap-10">

            @foreach ([
                ['icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5', 'title' => 'Smart Consultation', 'desc' => 'Personalised analysis that evolves with your environment and hormonal cycles.'],
                ['icon' => 'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z', 'title' => 'Conflict Checker', 'desc' => 'Instant alerts for ingredient clashing. Never mix Retinol with Vitamin C again.'],
                ['icon' => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5', 'title' => 'Routine Planner', 'desc' => 'Morning, evening, and weekly rituals tailored to your skin\'s hydration window.'],
                ['icon' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z', 'title' => 'Daily Tracker', 'desc' => 'Log here wins and progress with a tactile, sensory-friendly interface.'],
            ] as $pillar)
            <div class="flex flex-col items-start text-left">
                <div class="w-10 h-10 flex items-center justify-center bg-[#EDE6F5] rounded-xl mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#4A3B6B]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $pillar['icon'] }}" />
                    </svg>
                </div>
                <p class="font-semibold text-[#1E1A24] text-[16px] mb-2">{{ $pillar['title'] }}</p>
                <p class="text-[14px] text-[#7A7480] font-light leading-relaxed">{{ $pillar['desc'] }}</p>
            </div>
            @endforeach

        </div>

    </section>

    {{-- PATH TO PRESENCE --}}
    <section class="px-16 py-24 bg-[#F3EEE8]">

        <h2 class="font-['Bodoni_Moda'] text-[48px] tracking-[-1.5px] text-[#1E1A24] text-center mb-20">
            The Path to Presence.
        </h2>

        <div class="flex flex-col gap-16 max-w-[700px] mx-auto">

            <div class="grid grid-cols-2 gap-8 items-center">
                <div class="text-right">
                    <p class="text-[80px] font-['Bodoni_Moda'] text-[#E0D9D0] leading-none">01</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[#4A3B6B] uppercase tracking-[2px] mb-2">Scan Your Inventory</p>
                    <p class="text-[15px] text-[#7A7480] font-light leading-relaxed">
                        Upload your shelf. Our AI identifies every active ingredient and base, building your digital botanical cabinet.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 items-center">
                <div>
                    <p class="text-sm font-semibold text-[#4A3B6B] uppercase tracking-[2px] mb-2">Define Your Intention</p>
                    <p class="text-[15px] text-[#7A7480] font-light leading-relaxed">
                        Tell us what you seek — clarity, resilience, or hydration. We align your existing products into a cohesive daily flow.
                    </p>
                </div>
                <div class="text-left">
                    <p class="text-[80px] font-['Bodoni_Moda'] text-[#E0D9D0] leading-none">02</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 items-center">
                <div class="text-right">
                    <p class="text-[80px] font-['Bodoni_Moda'] text-[#E0D9D0] leading-none">03</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[#4A3B6B] uppercase tracking-[2px] mb-2">Embody the Ritual</p>
                    <p class="text-[15px] text-[#7A7480] font-light leading-relaxed">
                        Receive daily guidance on application order and timing. Watch as your skin transforms through consistent, intelligent care.
                    </p>
                </div>
            </div>

        </div>

    </section>

    {{-- TESTIMONIAL --}}
    <section class="px-16 py-28 text-center bg-[#FAF7F5]">

        <p class="text-[#C9B8E8] text-[64px] font-['Bodoni_Moda'] leading-none mb-6">"</p>

        <blockquote class="font-['Bodoni_Moda'] text-[32px] italic leading-snug text-[#1E1A24] max-w-[720px] mx-auto">
            LumiMate didn't just change my skin; it changed my relationship with myself. What used to be a chore is now my most cherished ten minutes of the day.
        </blockquote>

        <div class="flex items-center justify-center gap-3 mt-10">
            <div class="w-10 h-10 rounded-full bg-[#EDE6F5] flex items-center justify-center text-xs font-semibold text-[#4A3B6B]">
                EV
            </div>
            <div class="text-left">
                <p class="text-sm font-semibold text-[#1E1A24]">Elena Vanos</p>
                <p class="text-xs text-[#9B8EC4] uppercase tracking-[2px]">Ritualist since 2023</p>
            </div>
        </div>

    </section>

    {{-- CTA --}}
    <section class="px-16 py-24 bg-[#F3EEE8] text-center">

        <h2 class="font-['Bodoni_Moda'] text-[48px] tracking-[-1.5px] text-[#1E1A24] mb-10">
            Your Journey to Radiance Awaits.
        </h2>

        <a href="{{ route('register') }}"
           class="inline-block bg-[#4A3B6B] text-white text-sm font-medium px-10 py-4 rounded-full hover:bg-[#66558E] transition-colors">
            Claim Your Consultation
        </a>

    </section>

    {{-- FOOTER --}}
    <footer class="bg-[#1E1A24] px-16 py-12">

        <div class="flex flex-col items-center gap-6">

            <p class="text-[20px] font-semibold font-['Bodoni_Moda'] text-[#EDE6F5] tracking-wide">
                LumiMate
            </p>

            <div class="flex gap-8 text-xs text-[#7A7480] uppercase tracking-[2px]">
                <a href="#" class="hover:text-[#C9B8E8] transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-[#C9B8E8] transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-[#C9B8E8] transition-colors">Skincare</a>
                <a href="#" class="hover:text-[#C9B8E8] transition-colors">Rituals</a>
            </div>

            <p class="text-xs text-[#5C5568]">
                © 2026 LumiMate Rituals. All rights reserved.
            </p>

        </div>

    </footer>

</body>
</html>
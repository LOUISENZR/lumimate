<nav class="px-10 py-8 flex items-center justify-between bg-[#F8F5F1] border-b border-[#E8E1D8]">

    {{-- LEFT --}}
    <div>

        <p class="uppercase tracking-[4px] text-sm text-[#66558E]">
            The Ritual Journey
        </p>

        <h1 class="text-[52px] leading-none mt-3 font-medium text-[#2B2238] font-['Bodoni_Moda']">
            Good Evening, {{ Auth::user()->name }}
        </h1>

    </div>

    {{-- RIGHT --}}
    <div class="flex items-center gap-5">

        <button class="bg-[#66558E] text-white px-8 py-4 rounded-full hover:opacity-90 transition">

            ✨ Log Tonight's Ritual

        </button>

        <div class="w-12 h-12 rounded-full bg-[#DED0F8] flex items-center justify-center text-[#66558E] font-semibold">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>

    </div>

</nav>
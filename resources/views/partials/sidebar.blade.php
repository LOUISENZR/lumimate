<aside class="w-[280px] bg-[#F7F3EE] border-r border-[#E8E1D8] px-8 py-10 flex flex-col justify-between relative">

    {{-- TOGGLE BUTTON (di dalam sidebar, pojok kanan atas) --}}
    <button
        @click="sidebarOpen = false"
        class="absolute top-6 right-4 w-9 h-9 rounded-xl border border-[#E8E1D8]
               bg-[#FBF8F4] flex items-center justify-center hover:bg-[#F3EEE8]
               transition-all duration-300 shadow-sm text-sm"
    >
        ✕
    </button>

    {{-- TOP --}}
    <div>

        {{-- LOGO --}}
        <div class="mb-14">
            <h1 class="text-[32px] text-[#66558E] font-medium font-['Bodoni_Moda']">
                LumiMate
            </h1>
            <p class="text-sm text-[#7B7288] mt-2 tracking-[3px] uppercase">
                Ritual Dashboard
            </p>
        </div>

        {{-- MENU --}}
        <nav class="space-y-3">

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl bg-[#DED0F8] text-[#66558E] font-medium">

                <span>✦</span>
                <span>Dashboard</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>Consultation</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>My Products</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>Ingredient Analysis</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>Conflict Checker</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>Routine Planner</span>

            </a>

            <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">

                <span>✦</span>
                <span>Daily Tracker</span>

            </a>

        </nav>

    </div>

    {{-- BOTTOM --}}
    <div class="space-y-3">

        <a href="#" class="block px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">
            Settings
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="w-full text-left px-5 py-4 rounded-2xl hover:bg-[#EFE7FF] transition">
                Logout
            </button>
        </form>

    </div>

</aside>
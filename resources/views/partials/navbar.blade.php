<nav class="w-full px-10 py-6 bg-[#FAFAFC] flex items-center justify-between">

    <div>
        <p class="uppercase tracking-[4px] text-sm text-[#66558E]">
            The Ritual Journey
        </p>

        <h1 class="text-5xl font-medium font-['Bodoni_Moda'] mt-2">
            Good Evening, {{ Auth::user()->name ?? 'Arcy' }} 👋
        </h1>
    </div>

    <button class="bg-[#66558E] text-white px-8 py-4 rounded-full font-medium hover:opacity-90 transition">
        ✨ Log Tonight's Ritual
    </button>

</nav>
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-2 bg-[#4A3B6B] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#66558E] focus:outline-none focus:ring-2 focus:ring-[#9B8EC4] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

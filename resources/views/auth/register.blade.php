<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- NAME --}}
        <div>
            <label class="block text-sm text-[#66558E] mb-3 uppercase tracking-[2px]">
                Full Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="block w-full rounded-2xl border border-[#DDD7CF] bg-transparent px-5 py-4 focus:outline-none focus:border-[#66558E]"
            >
        </div>

        {{-- EMAIL --}}
        <div class="mt-4">
            <label class="block text-sm text-[#66558E] mb-3 uppercase tracking-[2px]">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="username"
                class="block w-full rounded-2xl border border-[#DDD7CF] bg-transparent px-5 py-4 focus:outline-none focus:border-[#66558E]"
            >
        </div>

        {{-- PASSWORD --}}
        <div class="mt-4">
            <label class="block text-sm text-[#66558E] mb-3 uppercase tracking-[2px]">
                Password
            </label>

            <input
                type="password"
                name="password"
                required
                autocomplete="new-password"
                class="block w-full rounded-2xl border border-[#DDD7CF] bg-transparent px-5 py-4 focus:outline-none focus:border-[#66558E]"
            >
        </div>

        {{-- CONFIRM PASSWORD --}}
        <div class="mt-4">
            <label class="block text-sm text-[#66558E] mb-3 uppercase tracking-[2px]">
                Confirm Password
            </label>

            <input
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                class="block w-full rounded-2xl border border-[#DDD7CF] bg-transparent px-5 py-4 focus:outline-none focus:border-[#66558E]"
            >
        </div>

        {{-- BUTTON --}}
        <div class="flex items-center justify-end mt-6">

            <button
                type="submit"
                class="bg-[#66558E] text-white px-8 py-4 rounded-2xl hover:opacity-90 transition"
            >
                Create Account
            </button>

        </div>

    </form>

</x-guest-layout>
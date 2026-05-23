@extends('layouts.app')

@section('content')

<div class="grid grid-cols-3 gap-6">

    {{-- CARD 1 --}}
    <div class="bg-[#FBF8F4] rounded-[32px] p-8 border border-[#E8E1D8]">

        <p class="uppercase tracking-[3px] text-sm text-[#66558E]">
            Skin Synthesis
        </p>

        <h2 class="mt-6 text-[42px] leading-none font-medium font-['Bodoni_Moda'] text-[#2D2438]">
            Combination / Oily
        </h2>

        <div class="mt-10 space-y-6">

            <div>
                <p class="text-[#8C8497] text-sm">
                    Primary Concern
                </p>

                <p class="mt-1 text-lg font-medium">
                    Hyperpigmentation
                </p>
            </div>

            <div>
                <p class="text-[#8C8497] text-sm">
                    Sensitivity
                </p>

                <p class="mt-1 text-lg font-medium text-[#66558E]">
                    Moderate Reactive
                </p>
            </div>

        </div>

    </div>

    {{-- CARD 2 --}}
    <div class="bg-[#FBF8F4] rounded-[32px] p-8 border border-[#E8E1D8]">

        <p class="uppercase tracking-[3px] text-sm text-[#66558E]">
            Ritual Progress
        </p>

        <h2 class="mt-8 text-[72px] leading-none font-semibold text-[#66558E]">
            75%
        </h2>

        <p class="mt-4 text-[#7B7288]">
            Weekly consistency achieved.
        </p>

    </div>

    {{-- CARD 3 --}}
    <div class="bg-[#DED0F8] rounded-[32px] p-8">

        <p class="uppercase tracking-[3px] text-sm text-[#66558E]">
            Ritual Streak
        </p>

        <h2 class="mt-8 text-[72px] leading-none font-semibold text-[#4A3B6B]">
            12
        </h2>

        <p class="mt-4 text-[#5E5374]">
            Your skin is glowing beautifully ✨
        </p>

    </div>

</div>

@endsection
@extends('layouts.app')

@section('content')

<div>

    <div class="grid grid-cols-3 gap-6">

        <div class="bg-white rounded-[32px] p-8 border border-[#EEEAF5]">
            <h2 class="text-4xl font-['Bodoni_Moda'] text-[#66558E]">
                Skin Synthesis
            </h2>

            <div class="mt-8 space-y-6">

                <div>
                    <p class="text-gray-400">Type</p>
                    <p class="font-medium">Combination / Oily</p>
                </div>

                <div>
                    <p class="text-gray-400">Primary Concern</p>
                    <p class="font-medium">Hyperpigmentation</p>
                </div>

                <div>
                    <p class="text-gray-400">Sensitivity</p>
                    <p class="font-medium text-[#66558E]">
                        Moderate Reactive
                    </p>
                </div>

            </div>

        </div>

        <div class="bg-white rounded-[32px] p-8 border border-[#EEEAF5]">
            <h2 class="text-2xl font-semibold">
                Ritual Progress
            </h2>

            <p class="mt-6 text-5xl font-bold text-[#66558E]">
                75%
            </p>
        </div>

        <div class="bg-[#F3ECFF] rounded-[32px] p-8">
            <h2 class="text-2xl font-semibold text-[#66558E]">
                12 Day Streak
            </h2>

            <p class="mt-4 text-gray-500">
                You're glowing, Arcy ✨
            </p>
        </div>

    </div>

</div>

@endsection
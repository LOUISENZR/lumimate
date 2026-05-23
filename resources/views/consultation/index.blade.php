@extends('layouts.app')

@section('content')

<div
    x-data="{
        current: 0,
        total: {{ $total }},
        answers: {},
        select(questionId, optionId) {
            this.answers[questionId] = optionId;
        },
        next() { if (this.current < this.total - 1) this.current++ },
        prev() { if (this.current > 0) this.current-- },
        get answered() { return this.answers[questions[this.current]] !== undefined },
        get progress() { return Math.round(((this.current + 1) / this.total) * 100) }
    }"
    x-init="questions = {{ $questions->pluck('id') }}"
>

    {{-- PROGRESS BAR --}}
    <div class="mb-10">
        <div class="flex justify-between text-sm text-[#8C8497] mb-3">
            <span x-text="'Step ' + (current + 1) + ': ' + '{{ strtoupper($questions[0]->module ?? 'Analysis') }}'"></span>
            <span x-text="(current + 1) + ' of ' + total"></span>
        </div>
        <div class="w-full h-[2px] bg-[#E8E1D8] rounded-full">
            <div
                class="h-[2px] bg-[#66558E] rounded-full transition-all duration-500"
                :style="'width: ' + progress + '%'"
            ></div>
        </div>
    </div>

    {{-- FORM --}}
    <form method="POST" action="{{ route('consultation.store') }}">
        @csrf

        @foreach ($questions as $index => $question)

        {{-- QUESTION SLIDE --}}
        <div x-show="current === {{ $index }}" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-4"
            x-transition:enter-end="opacity-100 translate-x-0">

            <div class="grid grid-cols-2 gap-16 items-start">

                {{-- LEFT --}}
                <div>

                    <p class="uppercase tracking-[3px] text-sm text-[#66558E] mb-6">
                        {{ str_replace('_', ' ', $question->dimension) }}
                    </p>

                    <h2 class="text-[38px] leading-tight font-medium font-['Bodoni_Moda'] text-[#2D2438] mb-6">
                        {{ $question->question }}
                    </h2>

                    {{-- OPTIONS --}}
                    <div class="grid grid-cols-2 gap-3 mt-8">

                        @foreach ($question->options as $option)
                        <label
                            class="cursor-pointer"
                            @click="select({{ $question->id }}, {{ $option->id }})"
                        >
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="{{ $option->id }}"
                                class="hidden"
                            >
                            <div
                                :class="answers[{{ $question->id }}] == {{ $option->id }}
                                    ? 'bg-[#DED0F8] border-[#66558E] text-[#4A3B6B]'
                                    : 'bg-[#FBF8F4] border-[#E8E1D8] text-[#3A3A3A] hover:bg-[#EFE7FF]'"
                                class="border rounded-2xl px-5 py-4 transition-all duration-200"
                            >
                                <p class="font-medium text-sm">{{ $option->option_text }}</p>

                                @if ($option->system_impact)
                                <p class="text-xs mt-1 text-[#8C8497]">{{ $option->system_impact }}</p>
                                @endif
                            </div>
                        </label>
                        @endforeach

                    </div>

                </div>

                {{-- RIGHT — dekorasi --}}
                <div class="flex items-center justify-center">
                    <div class="w-full aspect-square max-w-[340px] rounded-[32px] bg-[#EFE7FF] flex items-center justify-center">
                        <span class="text-[80px] opacity-40">✦</span>
                    </div>
                </div>

            </div>

        </div>

        @endforeach

        {{-- NAVIGATION --}}
        <div class="flex justify-between items-center mt-14">

            <button
                type="button"
                @click="prev"
                x-show="current > 0"
                class="px-8 py-4 rounded-full border border-[#E8E1D8] text-[#66558E] hover:bg-[#EFE7FF] transition"
            >
                ← Back
            </button>

            <div class="ml-auto">

                {{-- NEXT (bukan last question) --}}
                <button
                    type="button"
                    @click="next"
                    x-show="current < total - 1"
                    :disabled="!answers[questions[current]]"
                    :class="answers[questions[current]] ? 'bg-[#66558E] hover:opacity-90' : 'bg-[#C5BDD8] cursor-not-allowed'"
                    class="px-8 py-4 rounded-full text-white transition"
                >
                    Continue →
                </button>

                {{-- SUBMIT (last question) --}}
                <button
                    type="submit"
                    x-show="current === total - 1"
                    :disabled="!answers[questions[current]]"
                    :class="answers[questions[current]] ? 'bg-[#66558E] hover:opacity-90' : 'bg-[#C5BDD8] cursor-not-allowed'"
                    class="px-8 py-4 rounded-full text-white transition"
                >
                    Submit →
                </button>

            </div>

        </div>

    </form>

</div>

@endsection
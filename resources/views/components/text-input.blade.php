@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border border-[#C9B8E8] bg-[#EDE6F5] focus:border-[#9B8EC4] focus:ring-[#9B8EC4] rounded-md shadow-sm']) }}>
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#66558E] uppercase tracking-[2px]']) }}>
    {{ $value ?? $slot }}
</label>

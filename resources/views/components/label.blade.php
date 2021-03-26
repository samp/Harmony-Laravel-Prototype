@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-open-sans font-medium text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

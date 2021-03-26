@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-open-sans font-medium text-gray-700 dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>

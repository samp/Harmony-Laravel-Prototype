<x-app-layout>
    <x-slot name="title">
        {{ $event->name }}
    </x-slot>

    <x-card class="flex-col">
        <picture class="w-full">
            <source srcset="{{ '../storage/' . $event->image }}">
            <img class="w-full h-full object-cover" src="{{ '../storage/' . $event->image }}"
                alt="{{ $event->name . ' cover image' }}">
        </picture>

        <div class="flex flex-col p-4">
            <h1 class="text-4xl mb-2 font-medium font-poppins">{{ $event->name }}</h1>
            <h2 class="text-2xl font-poppins">{{ $event->artist }}</h2>
            <p class="mt-4">
                {{ \Carbon\Carbon::parse($event->time)->format('jS F Y - h:i A') }}</p>
            <p class="mb-4">{{ $event->location }}</p>
            <p>{{ $event->description }}</p>
            <x-button-link :href="route('events') . '/' . $event->id" class="mt-4 ml-auto">
                {{ 'Book' }}
            </x-button-link>
        </div>
    </x-card>
</x-app-layout>

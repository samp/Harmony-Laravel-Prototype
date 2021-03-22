<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach($events as $event)
            <div class="flex flex-col md:flex-row bg-white rounded-xl shadow overflow-hidden mb-4">
                <img alt="{{ $event->description }}" src="/storage/{{ $event->image }}" class="w-full md:w-64">
                <div class="p-4">
                    <h2 class="font-bold text-xl text-gray-800">{{ $event->artist }} - {{ $event->name }} </h2>
                    <h3 class="text-sm text-gray-600 pb-4">{{ $event->time }} @ {{ $event->location }}</h3>
                    <p class="text-gray-700">{{ $event->description }}</p>
                </div> 
            </div>
        @endforeach
        </div>
    </div>
</x-app-layout>

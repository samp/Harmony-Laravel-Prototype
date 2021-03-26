<x-app-layout>
    <x-slot name="title">
        Events
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($events as $event)

            <x-card class="flex-col">
                <picture class="w-full h-52">
                    <img alt="{{ $event->description }}" src="/storage/{{ $event->image }}"
                        class="w-full h-full object-cover">
                </picture>
                <div class="flex flex-col p-4 flex-grow">
                    <h3 class="font-medium text-xl font-poppins">{{ $event->name }}
                    </h3>
                    <h3 class="font-medium text-lg font-poppins">{{ $event->artist }}
                    </h3>
                    <div class="py-2">
                        <p>
                            {{ \Carbon\Carbon::parse($event->time)->format('jS F Y - h:i A') }}</p>
                        <p>{{ $event->location }}</p>
                    </div>
                    <x-button-link :href="route('events') . '/' . $event->id" class="mt-auto ml-auto">
                        {{ 'More' }}
                    </x-button-link>
                </div>

            </x-card>
        @endforeach
    </div>
    <div class="py-4">
        {{ $events->links() }}
    </div>

</x-app-layout>

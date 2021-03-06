<x-app-layout>
    <x-slot name="title">
        Events
    </x-slot>

    <x-card class="flex-col p-6">
        <div class="flex flex-row items-center justify-between mb-2">
            <h1 class="text-2xl font-poppins">Events</h1>
            <x-button-link :href="route('admin.event.create')" class="ml-4">
                {{ 'Create' }}
            </x-button-link>
        </div>
        @foreach ($events as $event)
            <div class="flex flex-row py-4 justify-between">
                <div>
                    <p>{{ $event->artist }} - {{ $event->name }} ({{ $event->location }} @
                        {{ $event->time }})
                        [{{ $event->description }}]</p>
                </div>
                <div class="ml-4">
                    <x-button-link :href="route('admin.event') . '/' . $event->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
            </div>

        @endforeach
    </x-card>
</x-app-layout>

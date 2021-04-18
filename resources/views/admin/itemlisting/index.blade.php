<x-app-layout>
    <x-slot name="title">
        Item Listings
    </x-slot>

    <<x-card class="flex-col p-6">
        <div class="flex flex-row justify-between items-center mb-2">
            <h1 class="text-2xl font-poppins">Item Listings</h1>
            <x-button-link :href="route('admin.itemlisting.create')" class="ml-4">
                {{ 'Create' }}
            </x-button-link>
        </div>
        @foreach ($itemlistings as $itemlisting)
            <div class="flex flex-row py-4 justify-between">
                <div>
                    <p>{{ $itemlisting->name }} - {{ $itemlisting->price }} [{{ $itemlisting->keywords }}]
                    </p>
                </div>
                <div class="ml-4">
                    <x-button-link :href="route('admin.itemlisting') . '/' . $itemlisting->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
            </div>
        @endforeach
        </x-card>
</x-app-layout>

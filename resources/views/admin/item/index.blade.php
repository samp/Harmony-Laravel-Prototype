<x-app-layout>
    <x-slot name="title">
        Items
    </x-slot>

    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
        <div class="p-6">
            <div class="flex flex-row items-center justify-between mb-2">
                <h1 class="text-3xl font-poppins">Items</h1>
                <x-button-link :href="route('admin.item.create')" class="ml-4">
                    {{ 'Create' }}
                </x-button-link>
            </div>

            @foreach ($items as $item)
                <div class="flex flex-row py-4 justify-between">
                    <div>
                        <p>{{ $item->itemlisting->name }} ({{ $item->itemListing->price }}) - {{ $item->size }}
                        </p>
                    </div>
                    <div class="ml-4">
                        <x-button-link :href="route('admin.item') . '/' . $item->id . '/edit'">
                            {{ 'Edit' }}
                        </x-button-link>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>

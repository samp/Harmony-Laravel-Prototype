<x-app-layout>
    <x-slot name="title">
        Albums
    </x-slot>

    <x-card class="flex-col p-6">
        <div class="flex flex-row items-center justify-between mb-2">
            <h1 class="text-3xl font-poppins">Albums</h1>
            <x-button-link :href="route('admin.album.create')" class="ml-4">
                {{ 'Create' }}
            </x-button-link>
        </div>
        @foreach ($albums as $album)
            <div class="flex flex-row py-4 justify-between">
                <div>
                    <p>{{ $album->albumListing->artist }} - {{ $album->albumListing->name }}
                        ({{ $album->format }})
                        - {{ $album->price }}</p>
                </div>
                <div class="ml-4">
                    <x-button-link :href="route('admin.album') . '/' . $album->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
            </div>
        @endforeach
    </x-card>
</x-app-layout>

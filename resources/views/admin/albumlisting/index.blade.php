<x-app-layout>
    <x-slot name="title">
        Album Listings
    </x-slot>

    <x-card class="flex-col p-6">
        <div class="flex flex-row justify-between items-center mb-2">
            <h1 class="text-3xl font-poppins">Album Listings</h1>

            <x-button-link :href="route('admin.albumlisting.create')" class="ml-4">
                {{ 'Add new' }}
            </x-button-link>

        </div>
        @foreach ($albumlistings as $albumlisting)
            <div class="mb-4">
                <div class="flex flex-row justify-between mb-2">
                    <h3 class="text-xl font-poppins">{{ $albumlisting->artist }} -
                        {{ $albumlisting->name }}
                    </h3>
                    <x-button-link :href="route('admin.albumlisting') . '/' . $albumlisting->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
                <p class="ml-6">{{ $albumlisting->description }}</p>
                <div class="flex flex-row gap-4 flex-wrap">
                    @foreach ($albumlisting->albums as $album)
                        <ul>
                            <li>{{ $album->format }}</li>
                            <ul>
                                @foreach ($album->discs as $disc)
                                    <li>{{ $disc->name }}</li>
                                    <ul>
                                        @foreach ($disc->tracks as $track)
                                            <li>{{ $track->name }} ({{ $track->length }})</li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            </ul>
                        </ul>
                    @endforeach
                </div>
            </div>
        @endforeach
    </x-card>
</x-app-layout>

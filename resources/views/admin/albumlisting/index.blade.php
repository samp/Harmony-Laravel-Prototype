<x-app-layout>
    <x-slot name="title">
        Album Listings
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Album Listings</h1>
                    @foreach($albumlistings as $albumlisting)
                        <p>{{ $albumlisting->artist }} - {{ $albumlisting->name }}</p>
                        <img src="/storage/{{ $albumlisting->cover_image }}"> 
                    @endforeach

                    <a href="{{ route('admin.albumlisting.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

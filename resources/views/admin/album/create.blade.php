<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Create Album</h1>
                    <form method="post">
                        @csrf
                        <div>
                            <label for="format">Format:</label>
                            <input type="text" name="format" id="format" value="{{ old('format') }}">

                            @error('format')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="album_listing_id">Album Listing:</label>
                            <select name="album_listing_id" id="album_listing_id">
                                @foreach($albumlistings as $albumlisting)
                                    <option value="{{ $albumlisting->id }}">{{ $albumlisting->artist }} - {{ $albumlisting->name }}</option>
                                @endforeach
                            </select>

                            @error('album_listing_id')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

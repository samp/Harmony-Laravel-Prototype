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
                    <h1>Create Disc</h1>
                    <form method="post">
                        @csrf
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="album_id">Album:</label>
                            <select name="album_id" id="album_id">
                                @foreach($albums as $album)
                                    <option value="{{ $album->id }}">{{ $album->albumListing->name }} - {{ $album->format }}</option>
                                @endforeach
                            </select>

                            @error('album_id')
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

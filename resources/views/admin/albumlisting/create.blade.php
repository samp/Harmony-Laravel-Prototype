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
                    <h1>Create Album Listing</h1>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="artist">Artist:</label>
                            <input type="text" name="artist" id="artist" value="{{ old('artist') }}">

                            @error('artist')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" value="{{ old('description') }}">

                            @error('description')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="genre">Genre:</label>
                            <input type="text" name="genre" id="genre" value="{{ old('genre') }}">

                            @error('genre')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="release_date">Release Date:</label>
                            <input type="date" name="release_date" id="release_date" value="{{ old('release_date') }}">

                            @error('release_date')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="cover_image">Cover Image:</label>
                            <input type="file" name="cover_image" id="cover_image">

                            @error('cover_image')
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

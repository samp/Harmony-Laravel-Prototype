<x-app-layout>
    <x-slot name="title">
        Create Album Listing
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Create Album Listing</h1>
                    <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                        @csrf
                        <div class="grid grid-cols-2 items-center">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="artist">Artist:</label>
                            <input type="text" name="artist" id="artist" value="{{ old('artist') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('artist')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" value="{{ old('description') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('description')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="genre">Genre:</label>
                            <input type="text" name="genre" id="genre" value="{{ old('genre') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('genre')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="release_date">Release Date:</label>
                            <input type="date" name="release_date" id="release_date" value="{{ old('release_date') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('release_date')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="cover_image">Cover Image:</label>
                            <input type="file" name="cover_image" id="cover_image">

                            @error('cover_image')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit"
                            class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                                class="mx-2 text-xl">Create</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

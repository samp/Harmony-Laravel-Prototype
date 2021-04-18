<x-app-layout>
    <x-slot name="title">
        Edit Album Listing
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-2xl font-poppins mb-2">Edit Album Listing</h1>
        <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $albumlisting->name }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="artist">Artist:</label>
                <input type="text" name="artist" id="artist" value="{{ $albumlisting->artist }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('artist')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $albumlisting->description }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre" value="{{ $albumlisting->genre }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('genre')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="release_date">Release Date:</label>
                <input type="date" name="release_date" id="release_date"
                    value="{{ \Carbon\Carbon::parse($albumlisting->release_date)->format('Y-m-d') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">
                @error('release_date')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <x-button type="submit" name="submit">
                {{ 'Update' }}
            </x-button>
        </form>

        <form method="post" class="flex flex-col gap-4 pt-2">
            @csrf
            @method('delete')

            <x-button>
                {{ 'Delete' }}
            </x-button>
        </form>
    </x-card>
</x-app-layout>

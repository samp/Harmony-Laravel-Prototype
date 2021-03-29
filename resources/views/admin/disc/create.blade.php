<x-app-layout>
    <x-slot name="title">
        Create Album
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Create Disc</h1>
        <form method="post" class="flex flex-col gap-4">
            @csrf
            <div class="grid grid-cols-2 items-center">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="album_id">Album:</label>
                <select name="album_id" id="album_id" class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">
                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->albumListing->name }} -
                            {{ $album->format }}</option>
                    @endforeach
                </select>

                @error('album_id')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <x-button type="submit" name="submit">
                {{ 'Create' }}
            </x-button>
        </form>
    </x-card>
</x-app-layout>

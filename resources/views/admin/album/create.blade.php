<x-app-layout>
    <x-slot name="title">
        Create Album
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Create Album</h1>
        <form method="post" class="flex flex-col gap-4">
            @csrf
            <div class="grid grid-cols-2 items-center">
                <label for="format">Format:</label>
                <input type="text" name="format" id="format" value="{{ old('format') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('format')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" min="0" step="any" value="{{ old('price') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('price')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" min="0" step="any" value="{{ old('stock') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('stock')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="album_listing_id">Album Listing:</label>
                <select name="album_listing_id" id="album_listing_id" class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">
                    @foreach ($albumlistings as $albumlisting)
                        <option value="{{ $albumlisting->id }}">{{ $albumlisting->artist }} -
                            {{ $albumlisting->name }}</option>
                    @endforeach
                </select>

                @error('album_listing_id')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <x-button type="submit" name="submit">
                {{ 'Create' }}
            </x-button>
        </form>
    </x-card>
</x-app-layout>

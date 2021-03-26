<x-app-layout>
    <x-slot name="title">
        Edit Album
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Edit Album</h1>
                    <form method="post" class="flex flex-col gap-4">
                        @csrf
                        <div class="grid grid-cols-2 items-center">
                            <label for="format">Format:</label>
                            <input type="text" name="format" id="format" value="{{ $album->format }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('format')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" min="0" step="any" value="{{ $album->price }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('price')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="stock">Stock:</label>
                            <input type="number" name="stock" id="stock" min="0" step="any" value="{{ $album->stock }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('stock')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="album_listing_id">Album Listing:</label>
                            <select name="album_listing_id" id="album_listing_id"
                                class="rounded-lg shadow border-gray-300">
                                @foreach ($albumlistings as $albumlisting)
                                    <option value="{{ $albumlisting->id }}"
                                    
                                    @if( $album->album_listing_id == $albumlisting->id )
                                        selected
                                    @endif>{{ $albumlisting->artist }} -
                                        {{ $albumlisting->name }}</option>
                                @endforeach
                            </select>

                            @error('album_listing_id')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit"
                            class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                                class="mx-2 text-xl">Create</span></button>
                    </form>
                    <form method="post" class="flex flex-col gap-4 pt-2">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit"
                            class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                                class="mx-2 text-xl">Delete</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

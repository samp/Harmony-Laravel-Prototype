<x-app-layout>
    <x-slot name="title">
        Update Album
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Update Disc</h1>
                    <form method="post" class="flex flex-col gap-4">
                        @csrf
                        @method('patch')
                        <div class="grid grid-cols-2 items-center">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ $disc->name }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="album_id">Album:</label>
                            <select name="album_id" id="album_id" class="rounded-lg shadow border-gray-300">
                                @foreach ($albums as $album)
                                    <option value="{{ $album->id }}"
                                        @if($disc->album_id == $album->id)
                                            selected
                                        @endif
                                    >{{ $album->albumListing->name }} -
                                        {{ $album->format }}</option>
                                @endforeach
                            </select>

                            @error('album_id')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit"
                            class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                                class="mx-2 text-xl">Update</span></button>
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

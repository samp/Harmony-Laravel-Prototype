<x-app-layout>
    <x-slot name="title">
        Update Event
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Update Event</h1>
                    <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                        @csrf
                        @method('patch')
                        <div class="grid grid-cols-2 items-center">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ $event->name }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="artist">Artist:</label>
                            <input type="text" name="artist" id="artist" value="{{ $event->artist }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('artist')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" value="{{ $event->description }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('description')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="time">Time:</label>
                            <input type="datetime-local" name="time" id="time" value="{{ \Carbon\Carbon::parse($event->time)->format('Y-m-d') . 'T' . \Carbon\Carbon::parse($event->time)->format('H:i') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('time')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="location">Location:</label>
                            <input type="text" name="location" id="location" value="{{ $event->location }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('location')
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

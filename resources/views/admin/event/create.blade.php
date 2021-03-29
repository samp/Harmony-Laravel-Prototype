<x-app-layout>
    <x-slot name="title">
        Create Event
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Create Event</h1>
        <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
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
                <label for="artist">Artist:</label>
                <input type="text" name="artist" id="artist" value="{{ old('artist') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('artist')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ old('description') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="time">Time:</label>
                <input type="datetime-local" name="time" id="time" value="{{ old('time') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('time')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" value="{{ old('location') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('location')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image">

                @error('cover_image')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <x-button type="submit" name="submit">
                {{ 'Create' }}
            </x-button>
        </form>
    </x-card>
</x-app-layout>

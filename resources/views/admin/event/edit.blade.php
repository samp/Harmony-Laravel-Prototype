<x-app-layout>
    <x-slot name="title">
        Update Event
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Update Event</h1>
        <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $event->name }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="artist">Artist:</label>
                <input type="text" name="artist" id="artist" value="{{ $event->artist }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('artist')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $event->description }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="time">Time:</label>
                <input type="datetime-local" name="time" id="time"
                    value="{{ \Carbon\Carbon::parse($event->time)->format('Y-m-d') . 'T' . \Carbon\Carbon::parse($event->time)->format('H:i') }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('time')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" value="{{ $event->location }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('location')
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
            <x-button type="submit" name="submit">
                {{ 'Delete' }}
            </x-button>
        </form>
    </x-card>
</x-app-layout>

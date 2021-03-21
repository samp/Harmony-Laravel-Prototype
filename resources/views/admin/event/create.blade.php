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
                    <h1>Create Event</h1>
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
                            <label for="time">Time:</label>
                            <input type="datetime-local" name="time" id="time" value="{{ old('time') }}">

                            @error('time')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="location">Location:</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}">

                            @error('location')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image">

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

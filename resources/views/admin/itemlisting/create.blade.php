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
                    <h1>Create Item Listing</h1>
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
                            <label for="keywords">Key Words:</label>
                            <input type="text" name="keywords" id="keywords" value="{{ old('keywords') }}">

                            @error('keywords')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="price">Price:</label>
                            <input type="text" name="price" id="price" value="{{ old('price') }}">

                            @error('price')
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

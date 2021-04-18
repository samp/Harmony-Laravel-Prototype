<x-app-layout>
    <x-slot name="title">
        Update Item Listing
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-2xl font-poppins mb-2">Update Item Listing</h1>
        <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $itemlisting->name }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="keywords">Key Words:</label>
                <input type="text" name="keywords" id="keywords" value="{{ $itemlisting->keywords }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('keywords')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" min="0" step="any" value="{{ $itemlisting->price }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('price')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $itemlisting->description }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="type">Type:</label>
                <input type="text" name="type" id="type" value="{{ $itemlisting->type }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('type')
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

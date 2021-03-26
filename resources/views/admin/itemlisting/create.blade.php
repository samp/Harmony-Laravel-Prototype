<x-app-layout>
    <x-slot name="title">
        Create Item Listing
    </x-slot>

    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-poppins mb-2">Create Item Listing</h1>
            <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                <div class="grid grid-cols-2 items-center">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="keywords">Key Words:</label>
                    <input type="text" name="keywords" id="keywords" value="{{ old('keywords') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('keywords')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" min="0" step="any" value="{{ old('price') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('price')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" value="{{ old('description') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" value="{{ old('type') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('type')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="product_image">Product Image:</label>
                    <input type="file" name="product_image" id="product_image">

                    @error('product_image')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" name="submit"
                    class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                        class="mx-2 text-xl">Create</span></button>
            </form>
        </div>
    </div>

</x-app-layout>

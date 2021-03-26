<x-app-layout>
    <x-slot name="title">
        Create Carousel Item
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Create Carousel Item</h1>
                    <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                        @csrf
                        <div class="grid grid-cols-2 items-center">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image">

                            @error('image')
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
                            <label for="link">Link:</label>
                            <input type="text" name="link" id="link" value="{{ old('link') }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('link')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit"
                            class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors flex align-middle p-2 font-poppins"><span
                                class="mx-2 text-xl">Create</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

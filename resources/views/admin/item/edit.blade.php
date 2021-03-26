<x-app-layout>
    <x-slot name="title">
    Update Item
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-poppins mb-2">Update Item</h1>
                    <form method="post" class="flex flex-col gap-4">
                        @csrf
                        @method('patch')
                        <div class="grid grid-cols-2 items-center">
                            <label for="size">Size:</label>
                            <input type="text" name="size" id="size" value="{{ $item->size }}"
                                class="rounded-lg shadow border-gray-300">

                            @error('size')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 items-center">
                            <label for="item_listing_id">Item Listing:</label>
                            <select name="item_listing_id" id="item_listing_id"
                                class="rounded-lg shadow border-gray-300">
                                @foreach ($itemlistings as $itemlisting)
                                    <option value="{{ $itemlisting->id }}"
                                    
                                    @if($item->item_listing_id == $itemlisting->id)
                                        selected
                                    @endif
                                    >{{ $itemlisting->name }}</option>
                                @endforeach
                            </select>

                            @error('item_listing_id')
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

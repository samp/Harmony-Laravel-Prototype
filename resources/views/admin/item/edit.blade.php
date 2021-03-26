<x-app-layout>
    <x-slot name="title">
        Update Item
    </x-slot>

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
                    <select name="item_listing_id" id="item_listing_id" class="rounded-lg shadow border-gray-300">
                        @foreach ($itemlistings as $itemlisting)
                            <option value="{{ $itemlisting->id }}" @if ($item->item_listing_id == $itemlisting->id) selected @endif>{{ $itemlisting->name }}</option>
                        @endforeach
                    </select>

                    @error('item_listing_id')
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
        </div>
    </div>
</x-app-layout>

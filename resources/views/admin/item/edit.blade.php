<x-app-layout>
    <x-slot name="title">
        Update Item
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Update Item</h1>
        <form method="post" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="size">Size:</label>
                <input type="text" name="size" id="size" value="{{ $item->size }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('size')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="item_listing_id">Item Listing:</label>
                <select name="item_listing_id" id="item_listing_id"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">
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
    </x-card>
</x-app-layout>

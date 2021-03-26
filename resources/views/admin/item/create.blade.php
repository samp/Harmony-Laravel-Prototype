<x-app-layout>
    <x-slot name="title">
        Create Item
    </x-slot>

    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-poppins mb-2">Create Item</h1>
            <form method="post" class="flex flex-col gap-4">
                @csrf
                <div class="grid grid-cols-2 items-center">
                    <label for="size">Size:</label>
                    <input type="text" name="size" id="size" value="{{ old('size') }}"
                        class="rounded-lg shadow border-gray-300">

                    @error('size')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 items-center">
                    <label for="item_listing_id">Item Listing:</label>
                    <select name="item_listing_id" id="item_listing_id" class="rounded-lg shadow border-gray-300">
                        @foreach ($itemlistings as $itemlisting)
                            <option value="{{ $itemlisting->id }}">{{ $itemlisting->name }}</option>
                        @endforeach
                    </select>

                    @error('item_listing_id')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <x-button type="submit" name="submit">
                    {{ 'Create' }}
                </x-button>
            </form>
        </div>
    </div>

</x-app-layout>

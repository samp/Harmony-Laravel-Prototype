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
                    <h1>Create Item</h1>
                    <form method="post">
                        @csrf
                        <div>
                            <label for="size">Size:</label>
                            <input type="text" name="size" id="size" value="{{ old('size') }}">

                            @error('size')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="item_listing_id">Album Listing:</label>
                            <select name="item_listing_id" id="item_listing_id">
                                @foreach($itemlistings as $itemlisting)
                                    <option value="{{ $itemlisting->id }}">{{ $itemlisting->name }}</option>
                                @endforeach
                            </select>

                            @error('item_listing_id')
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

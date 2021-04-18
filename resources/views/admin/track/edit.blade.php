<x-app-layout>
    <x-slot name="title">
        Update Track
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-2xl font-poppins mb-2">Update Track</h1>
        <form method="post" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $track->name }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="length">Length:</label>
                <input type="text" name="length" id="length" value="{{ $track->length }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('length')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" min="0" step="any" value="{{ $track->price }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('price')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="buyable">Buyable:</label>
                <input type="checkbox" id="buyable" name="buyable"
                    class="rounded-md shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent" @if ($track->buyable) checked @endif>

                @error('buyable')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="disc_id">Disc:</label>
                <select name="disc_id" id="disc_id"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">
                    @foreach ($discs as $disc)
                        <option value="{{ $disc->id }}">{{ $disc->album->albumlisting->artist }} -
                            {{ $disc->album->albumlisting->name }} ({{ $disc->album->format }} -
                            {{ $disc->name }})</option>
                    @endforeach
                </select>

                @error('disc_id')
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

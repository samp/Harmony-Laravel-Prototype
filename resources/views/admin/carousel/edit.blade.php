<x-app-layout>
    <x-slot name="title">
        Update Carousel Item
    </x-slot>

    <x-card class="flex-col p-6">
        <h1 class="text-3xl font-poppins mb-2">Update Carousel Item</h1>
        <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            @method('patch')
            <div class="grid grid-cols-2 items-center">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $carousel->description }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 items-center">
                <label for="link">Link:</label>
                <input type="text" name="link" id="link" value="{{ $carousel->link }}"
                    class="rounded-lg shadow border-gray-300 dark:bg-truegray-600 dark:border-transparent">

                @error('link')
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

<x-app-layout>
    <x-slot name="title">
        {{ $itemlisting->name }}
    </x-slot>

    <x-card class="flex-col sm:flex-row">
        <div class="h-full sm:max-w-sm">
            <picture>
                <source srcset="{{ '../storage/' . $itemlisting->product_image }}">
                <img class="w-full h-auto object-cover" src="{{ '../storage/' . $itemlisting->product_image }}"
                    alt="{{ $itemlisting->name }}'s cover image">
            </picture>
        </div>

        <div class="flex flex-col md:w-2/3 p-6">
            <div class="flex flex-col text-lg mb-6">
                <h1 class="text-4xl mb-2 font-medium font-poppins">
                    {{ $itemlisting->name }}
                </h1>
                <h2 class="text-3xl font-poppins">{{ $itemlisting->keywords }}</h2>
            </div>

            <div class="flex flex-col h-full">
                <p>{{ $itemlisting->description }}</p>
                <div class="flex flex-row justify-between">
                    <div class="grid grid-cols-2 items-center mt-4">
                        <label for="size">Size:</label>
                        <select name="size" id="size" class="rounded-lg shadow border-gray-300 dark:border-transparent dark:bg-truegray-600 dark:placeholder-truegray-100">
                            @foreach ($itemlisting->items as $item)
                                @if (is_null($item->stock) or $item->stock > 0)
                                    <option value="{{ $item->id }}">
                                        {{ $item->size }}</option>
                                @else
                                    <option value="{{ $item->id }}" disabled>
                                        {{ $item->size }}</option>
                                @endif
                            @endforeach
                        </select>

                        @error('size')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div
                    class="mt-auto rounded-md border-2 w-auto ml-auto border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-white transition-colors">
                    <a href="#" class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">Add
                            to cart
                        </span></a>
                </div>
            </div>
        </div>
    </x-card>
</x-app-layout>

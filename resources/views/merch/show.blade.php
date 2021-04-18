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
                <h2 class="text-xs font-poppins">[{{ $itemlisting->keywords }}]</h2>
            </div>

            <div class="flex flex-col h-full">
                <p>{{ $itemlisting->description }}</p>
                <div class="flex flex-row justify-between">
                    <div class="grid grid-cols-2 items-center mt-4">
                    <form action="/cart/add/merch/{{ $itemlisting->id }}" method="POST">
                        @CSRF
                        <label for="size">Size:</label>
                        <select name="size" id="size" class="rounded-lg shadow border-gray-300 dark:border-transparent dark:bg-truegray-600 dark:placeholder-truegray-100">
                            @foreach ($itemlisting->items as $item)
                                @if (is_null($item->stock) or $item->stock > 0)
                                    @if(!$loop->first)
                                    <option value="{{ $item->id }}">
                                        {{ $item->size }}</option>
                                    @else
                                    <option value="{{ $item->id }}" selected>
                                        {{ $item->size }}</option>
                                    @endif

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
               
                <x-button class="mt-auto ml-auto">
                    {{ 'Add to cart' }}
                </x-button>
                </form>
            </div>
        </div>
    </x-card>
</x-app-layout>

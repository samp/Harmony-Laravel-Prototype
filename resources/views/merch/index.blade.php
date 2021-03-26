<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col-reverse sm:grid sm:grid-cols-3 md:grid-cols-4 gap-4 mb-4">
            <div class="col-start-4 relative sm:ml-auto text-gray-600">
                <form>
                    <input
                        class="bg-white w-full border-none h-10 px-5 pr-16 rounded-lg shadow text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search" value="{{ Request()->input('search') }}">
                    <button type="submit" class="absolute right-0 h-10 px-4 py-1">
                        <i class="fas fa-search leading-7" aria-hidden="true"></i>
                    </button>
            </div>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-4">
            @forelse ($itemlistings as $item)
                <div class="flex flex-row md:flex-col lg:flex-row bg-white rounded-xl shadow overflow-hidden">
                    <picture class="w-52 md:w-full lg:w-52">
                        <source srcset="{{ 'storage/' . $item->product_image }}">
                        <img class="w-full h-full object-cover" src="{{ 'storage/' . $item->product_image }}"
                            alt="{{ $item->name . ' cover image' }}">
                    </picture>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-medium font-poppins text-xl">{{ $item->name }}</h3>
                        <h4 class="text-lg font-poppins">{{ $item->artist }}</h4>
                        <div class="py-4">
                            <p>{{ 'size stock info here maybe??' }}</p>
                        </div>
                        <div
                            class="text-right mt-auto ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="{{ route('merch') . '/' . $item->id }}"
                                class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">Buy
                                </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                @if ($loop->iteration == 4)
                    @break
                @endif
            @empty
                There are no products to display.
            @endforelse
        </div>

        <div class="py-4">
            {{ $itemlistings->links() }}
        </div>

    </div>

</x-app-layout>

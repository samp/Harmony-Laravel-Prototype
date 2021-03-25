<x-app-layout>


    <div class="w-full h-96 mb-6 bg-gray-500 text-white text-4xl text-center flex justify-center items-center rounded-xl shadow overflow-hidden">
        <h1 class="block">CAROUSEL HERE</h1>
    </div>

    <!-- New releases -->
    <div>
        <h2 class="text-3xl font-poppins mb-2">New releases</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mb-6">
            @foreach ($albumlistings as $albumlisting)
                <div class="flex flex-col w-full bg-white rounded-xl shadow overflow-hidden">
                    <picture>
                        <source srcset="{{ 'storage/' . $albumlisting->cover_image }}">
                        <img class="w-full h-auto object-cover" src="{{ 'storage/' . $albumlisting->cover_image }}"
                            alt="{{ $albumlisting->name . ' cover image' }}">
                    </picture>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-medium font-poppins text-xl">{{ $albumlisting->name }}</h3>
                        <h4 class="text-lg font-poppins">{{ $albumlisting->artist }}</h4>
                        <div class="py-2">
                            @foreach ($albumlisting->albums as $album)
                                <div class="flex flex-row">
                                    <span class="text-gray-700">{{ $album->format }}</span>
                                    @if (is_null($album->stock) or $album->stock > 0)
                                        <span class="ml-auto">{{ formatmoney($album->price) }}</span>
                                    @else
                                        <span class="ml-auto text-red-600">Out of stock</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div
                            class="text-right mt-auto ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="{{ route('music') . '/' . $albumlisting->id }}"
                                class="flex flex-row align-middle font-poppins p-2"><span class="mx-2 text-xl">Buy
                                </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration == 4)
                    @break
                @endif
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="flex flex-col">
            <h2 class="text-3xl font-poppins mb-2">New Merch</h2>
            <div class="flex flex-col gap-4">
                @foreach ($itemlistings as $item)
                    <div class="flex flex-row w-full bg-white rounded-xl shadow overflow-hidden">
                        <picture class="w-52">
                            <source srcset="{{ 'storage/' . $item->product_image }}">
                            <img class="w-full h-full object-cover" src="{{ 'storage/' . $item->product_image }}"
                                alt="{{ $item->name . ' cover image' }}">
                        </picture>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="font-medium font-poppins text-xl">{{ $item->name }}</h3>
                            <h4 class="text-lg font-poppins">{{ $item->artist }}</h4>
                            <p>{{ "size stock info here maybe??" }}</p>
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
                @endforeach
            </div>
        </div>
        <div class="flex flex-col">
            <h2 class="text-3xl font-poppins mb-2">Events</h2>

            <div class="flex flex-col gap-4">
                @foreach ($events as $event)
                    <div class="flex flex-row w-full bg-white rounded-xl shadow overflow-hidden">
                        <picture class="w-52">
                            <source srcset="{{ 'storage/' . $event->image }}">
                            <img class="w-full h-full object-cover" src="{{ 'storage/' . $event->image }}"
                                alt="{{ $event->name . ' cover image' }}">
                        </picture>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="font-medium font-poppins text-xl">{{ $event->name }}</h3>
                            <h4 class="text-lg font-poppins">{{ $event->artist }}</h4>
                            <p>{{ $event->location }}</p>
                            <p>{{ date('jS F Y h:i A', strtotime($event->time)) }}</p>
                            <div
                                class="text-right mt-auto ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                                <a href="{{ route('music') . '/' . $event->id }}"
                                    class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">More
                                    </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    @if ($loop->iteration == 4)
                        @break
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <h2 class="text-3xl font-poppins mb-2">Newsletter</h2>
    <div class="w-full bg-white rounded-xl shadow overflow-hidden mb-6">
        <div class="p-4">
            <p class="mb-2">Be the first to know about new releases and evemts by signing up to our newsletter.</p>
            <form>
                <input type="text" class="bg-white rounded-lg text-sm border-2 border-purple-400 mr-4 h-12">
                <button type="submit" class="h-12 p-2 w-auto rounded-lg border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">Sign up</button>
            </form>
        </div>
    </div>


</x-app-layout>

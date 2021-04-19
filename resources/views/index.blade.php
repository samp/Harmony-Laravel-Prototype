<x-app-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <x-slot name="scripts">
        <link rel="stylesheet" href="{{ asset('css/flickity.css') }}" media="screen">
        <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    </x-slot>

    <div
        class="w-full h-auto bg-gray-500 flex justify-center items-center rounded-xl shadow overflow-hidden">
        <div class="main-carousel w-full" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": true, "imagesLoaded": true }'>
            @foreach ($carousel as $carouselcell)
                <div class="carousel-cell w-full"><a href="{{ $carouselcell->link }}"><img
                            src="{{ 'storage/' . $carouselcell->image }}" class="object-cover w-full h-auto"
                            alt="{{ $carouselcell->description }}"></a></div>
            @endforeach
        </div>
    </div>

    <div class="mt-6">
        <h2 class="text-2xl font-poppins mb-2 dark:text-white">New releases</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mb-6">
            @foreach ($albumlistings as $albumlisting)
                <x-card class="flex-col">
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
                                    <span class="text-gray-700 dark:text-white">{{ $album->format }}</span>
                                    @if (is_null($album->stock) or $album->stock > 0)
                                        <span class="ml-auto">{{ formatmoney($album->price) }}</span>
                                    @else
                                        <span class="ml-auto text-red-600">Out of stock</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <x-button-link :href="route('music') . '/' . $albumlisting->id" class="mt-auto ml-auto">
                            {{ 'View' }}
                        </x-button-link>
                    </div>
                </x-card>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="flex flex-col">
            <h2 class="text-2xl font-poppins mb-2 dark:text-white">New Merch</h2>
            <div class="flex flex-col">
                @foreach ($itemlistings as $item)
                    <x-card class="flex-row md:flex-col lg:flex-row mb-4">
                        <picture class="w-52 md:w-full lg:w-52 min-w-1/2">
                            <source srcset="{{ 'storage/' . $item->product_image }}">
                            <img class="w-full h-full object-cover" src="{{ 'storage/' . $item->product_image }}"
                                alt="{{ $item->name . ' cover image' }}">
                        </picture>
                        <div class="p-4 flex flex-col flex-grow max-w-1/2">
                            <h3 class="font-medium font-poppins text-xl">{{ $item->name }}</h3>
                            <h4 class="text-md font-poppins">{{ $item->artist }}</h4>
                            <div class="py-2">
                                <p>{{ Str::limit($item->description, 200) }}</p>
                            </div>

                            <div class="flex">
                                <div class="flex-grow"></div>
                                <h5 class="text-lg font-poppins pt-1">{{ formatmoney($item->price) }}</h5>
                            </div>

                            <x-button-link :href="route('merch') . '/' . $item->id" class="mt-auto ml-auto">
                                {{ 'View' }}
                            </x-button-link>
                        </div>

                    </x-card>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col">
            <h2 class="text-2xl font-poppins mb-2 dark:text-white">Events</h2>
            <div class="flex flex-col">
                @foreach ($events as $event)
                    <x-card class="flex-row md:flex-col lg:flex-row mb-4">
                        <picture class="w-52 md:w-full lg:w-52 min-w-1/2">
                            <source srcset="{{ 'storage/' . $event->image }}">
                            <img class="w-full h-full object-cover" src="{{ 'storage/' . $event->image }}"
                                alt="{{ $event->name . ' cover image' }}">
                        </picture>
                        <div class="p-4 flex flex-col flex-grow max-w-1/2">
                            <h3 class="font-medium font-poppins text-xl">{{ $event->name }}</h3>
                            <h3 class="text-lg font-poppins">{{ $event->artist }}</h3>
                            <div class="py-2">
                                <p>
                                    {{ \Carbon\Carbon::parse($event->time)->format('jS F Y - h:i A') }}</p>
                                <p>{{ $event->location }}</p>
                            </div>
                            <x-button-link :href="route('events') . '/' . $event->id" class="mt-auto ml-auto">
                                {{ 'More' }}
                            </x-button-link>
                        </div>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>

    <h2 class="text-2xl font-poppins mb-2 dark:text-white">Newsletter</h2>
    <x-card>
        <div class="p-4">
            <p class="mb-2">Be the first to know about new releases and events by signing up to our newsletter.</p>
            <form class="flex flex-row">
                <input type="text" placeholder="someone@email.com"
                    class="w-60 bg-white dark:bg-truegray-600 dark:placeholder-truegray-100 rounded-lg text-sm border-2 border-purple-400 mr-4 h-12">
                <div>
                    <x-button type="submit" name="submit">
                        {{ 'Sign-up' }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-card>

</x-app-layout>

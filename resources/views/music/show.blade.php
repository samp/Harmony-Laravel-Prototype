<x-app-layout>
    <x-slot name="title">
        {{ $albumlisting->name }} - {{ $albumlisting->artist }}
    </x-slot>

    <x-card class="flex-col sm:flex-row">
        <div class="h-full sm:max-w-sm">
            <picture>
                <source srcset="{{ '../storage/' . $albumlisting->cover_image }}">
                <img class="w-full h-auto object-cover" src="{{ '../storage/' . $albumlisting->cover_image }}"
                    alt="{{ $albumlisting->name }}'s cover image">
            </picture>
        </div>
        <div class="flex flex-col md:flex-row md:w-2/3">
            <div class="flex flex-col mx-6 text-lg my-6">
                <h1 class="text-4xl mb-2 font-medium font-poppins">
                    {{ $albumlisting->name }}
                </h1>
                <h2 class="text-3xl font-poppins">{{ $albumlisting->artist }}</h2>

                <div class="mt-2 md:mt-auto font-opensans">
                    <p>Genre: {{ $albumlisting->genre }}</p>
                    <p>Released: {{ \Carbon\Carbon::parse($albumlisting->release_date)->format('jS F Y') }}
                    </p>
                </div>
            </div>

            <div class="md:ml-auto mx-6 my-6 mt-auto md:mt-6 flex flex-row md:flex-col">
                @foreach ($albumlisting->albums as $album)

                    @if (is_null($album->stock) or $album->stock > 0)
                        <div
                            class="md:mb-5 md:mr-0 mr-5 rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="?format={{ $album->format }}" class="block pt-3 pb-4 pl-5 pr-5 ">
                                <h1 class="text-2xl md:text-3xl mb-2 font-semibold text-right">
                                    {{ formatmoney($album->price) }}
                                </h1>
                                <h2 class="text-xl md:text-2xl text-right">{{ $album->format }}</h2>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </x-card>

    <div class="grid md:grid-cols-2 grid-cols-1 mt-4 md:gap-4">
        <div class="flex flex-col">
            <x-card class="flex-col p-4 mb-4">
                <h3 class="text-xl font-medium font-poppins mb-2">About</h3>
                <p class="text-base">
                    {{ $albumlisting->description }}
                </p>
            </x-card>
            <x-card class="flex-col">
                @forelse($merch as $merchitem)
                    <div class="flex flex-row @if (!$loop->last) mb-4 @endif">
                        <picture class="w-44">
                            <source srcset="{{ '../storage/' . $merchitem->product_image }}">
                            <img class="w-full h-full object-cover" src="{{ '../storage/' . $merchitem->product_image }}"
                            alt="{{ $merchitem->name . ' cover image' }}">
                        </picture>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-medium font-poppins">{{ $merchitem->name }}</h3>
                            <p class="">{{ formatmoney($merchitem->price) }}</p>

                            <x-button-link :href="route('merch') . '/' . $merchitem->id" class="mt-auto ml-auto">
                                {{ 'Buy' }}
                            </x-button-link>
                        </div>
                    </div>

                @empty
                    <p class="p-4">There are no related products to display.</p>
                @endforelse

            </x-card>
        </div>

        <x-card class="flex-col p-4">
            <h3 class="text-xl font-medium font-poppins">{{ $selectedalbum->format }} Track Listing </h3>
            @foreach ($selectedalbum->discs as $disc)
                <h4 class="ml-3 text-lg font-medium font-poppins">{{ $disc->name }}</h4>

                @foreach ($disc->tracks as $track)
                    <div class="grid grid-cols-10 justify-items-center items-center pb-3">
                        <a href="#"><i class="fas fa-play"></i>
                        </a>
                        <p class="ml-2 col-span-6 justify-self-start">{{ $track->name }}
                        </p>
                        <p>{{ $track->length }}</p>
                        <p>
                            @if ($track->price)
                                {{ formatmoney($track->price) }}
                            @else
                                -
                            @endif
                        </p>
                        @if ($track->buyable)
                            <form action="/cart/add/track/{{ $track->id }}" method="post">
                            @csrf
                                <button>
                                    <i class="fas fa-plus"></i>
                                </button>
                            </form>
                        @endif
                    </div>

                @endforeach
            @endforeach
        </x-card>

    </div>
</x-app-layout>

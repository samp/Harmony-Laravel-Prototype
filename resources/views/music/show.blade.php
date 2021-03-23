<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
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
                            <p>Released: {{ \Carbon\Carbon::parse($albumlisting->release_date)->format('jS F Y') }}</p>
                        </div>
                    </div>

                    <div class="md:ml-auto mx-6 my-6 mt-auto md:mt-6 flex flex-row md:flex-col">
                        @foreach($albumlisting->albums as $album)

                            @if($album->stock > 0)
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
            </div>

            <div class="grid md:grid-cols-2 grid-cols-1 mt-4 md:gap-4">
                <div class="flex flex-col">
                    <div class="w-full p-4 bg-white rounded-xl shadow mb-4">
                        <h3 class="text-xl font-medium font-poppins">About</h3>
                        <p class="mt-3 text-base">
                            {{ $albumlisting->description }}
                        </p>
                    </div>
                    <div class="w-full p-4 bg-white rounded-xl shadow mb-4 divide-y-2 divide-gray-200 divide-solid">
                    @forelse($merch as $merchitem)
                        <div class="flex flex-row @if(!$loop->last) mb-4 @endif">
                            <picture class="w-40 p-4">
                                <source srcset="{{ '../storage/' . $merchitem->product_image }}">
                                <img class="w-full h-auto object-cover" src="{{ '../storage/' . $merchitem->product_image }}" alt="Album">
                            </picture>
                            <div class="my-3 ml-3 flex flex-col">
                                <h3 class="text-lg font-medium font-poppins">{{ $merchitem->name }}</h3>
                                <p class="">{{ formatmoney($merchitem->price) }}</p>
                                <div
                                    class="mt-auto rounded-md border-2 w-20 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-white transition-colors">
                                    <a href="/merch/{{ $merchitem->id }}" class="block pt-3 pb-4 pl-5 pr-5">
                                        <p class="text-center">View</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    @empty
                        There is no related merch for this album.
                    @endforelse
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="w-full p-4 text-base sm:text-lg bg-white rounded-xl shadow mb-4">
                        <p>{{ $selectedalbum->format }} Track Listing </p>
                        @foreach($selectedalbum->discs as $disc)
                            {{ $disc->name }}

                            @foreach($disc->tracks as $track)
                            <div class="grid grid-cols-10 justify-items-center items-center pb-3">
                                <a href="#"><img class="w-4" src="../images/play-solid.svg" alt="Play">
                                </a>
                                <p class="ml-2 font-semibold col-span-6 justify-self-start">{{ $track->name }}</p>
                                <p>{{ $track->length }}</p>
                                <p>
                                    @if($track->price)
                                        {{ formatmoney($track->price) }}
                                    @else
                                    -
                                    @endif
                                </p>
                                @if($track->buyable)
                                    <a href="#"><img class="w-5" src="../images/plus.svg" alt="Add to cart icon"></a>
                                @endif
                            </div>

                            @endforeach
                        @endforeach
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

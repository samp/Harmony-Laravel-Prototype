<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col-reverse sm:grid sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">
                <div class="col-span-2 flex flex-row gap-2">
                    <div class="p-2 text-xl text-gray-700">
                        <i class="fas fa-filter" aria-hidden="true"></i>
                    </div>
                    @foreach($genres as $genre)
                        @if($genre == $selectedgenre)
                        <div
                            class="rounded-md border-2 hover:border-purple-400 hover:bg-white bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500 text-white border-transparent transition-colors">
                            <a href="?genre=" class="flex flex-row align-middle p-2"><span
                                    class="m-auto">{{ $genre }}</span></a>
                        </div>
                        @else
                        <div
                            class="bg-white rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="?genre={{ $genre }}" class="flex flex-row align-middle p-2"><span
                                    class="m-auto">{{ $genre }}</span></a>
                        </div>
                        @endif
                    @endforeach

                </div>
                <div class="col-start-4 relative sm:ml-auto text-gray-600">
                    <form>
                        <input class="bg-white w-full border-none h-10 px-5 pr-16 rounded-lg shadow text-sm focus:outline-none"
                            type="search" name="search" placeholder="Search" value="{{ Request()->input('search') }}">
                        <button type="submit" class="absolute right-0 h-10 px-4 py-1">
                            <i class="fas fa-search leading-7" aria-hidden="true"></i>
                        </button>
                </div>
                </form>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">
                @forelse($albumlistings as $albumlisting)
    
                <div class="flex flex-col w-full bg-white rounded-xl shadow overflow-hidden">
                    <picture>
                        <source srcset="{{ 'storage/' . $albumlisting->cover_image }}">
                        <img class="w-full h-auto object-cover" src="{{ 'storage/' . $albumlisting->cover_image }}"
                            alt="{{ $albumlisting->name . ' cover image' }}">
                    </picture>
                    <div class="p-4 font-poppins flex flex-col flex-grow">
                        <h3 class="font-medium text-xl">{{$albumlisting->name}}</h3>
                        <h4 class="text-lg">{{$albumlisting->artist}}</h4>
                        <div class="py-2">
                            @foreach($albumlisting->albums as $album)
                            <div class="flex flex-row">
                                <span class="text-gray-700">{{ $album->format }}</span>
                                @if(is_null($album->stock) or $album->stock > 0)
                                    <span class="ml-auto">{{ formatmoney($album->price) }}</span>
                                @else
                                    <span class="ml-auto text-red-600">Out of stock</span>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        <div
                            class="text-right mt-auto ml-auto w-24 rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="{{ route('music') . '/' . $albumlisting->id }}"
                                class="flex flex-row align-middle p-2"><span class="m-auto text-xl">Buy
                                </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>

                @empty
                <p class="text-red-500">empty.</p>
                @endforelse
            </div>

            <div class="py-4">
                {{ $albumlistings->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

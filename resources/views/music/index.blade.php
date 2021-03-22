<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            SEARCH STUFF HERE

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">
                @foreach($albumlistings as $albumlisting)

                <div class="flex flex-col w-full bg-white rounded-xl shadow overflow-hidden">
                    <picture>
                        <source srcset="{{ 'storage/' . $albumlisting->cover_image }}">
                        <img class="w-full h-auto object-cover" src="{{ 'storage/' . $albumlisting->cover_image }}" alt="{{ $albumlisting->name . ' cover image' }}">
                    </picture>
                    <div class="p-4 font-poppins flex flex-col flex-grow">
                        <h3 class="font-medium text-xl">{{$albumlisting->name}}</h3>
                        <h4 class="text-lg">{{$albumlisting->artist}}</h4>
                        <div class="py-2">
                        @foreach($albumlisting->albums as $album)
                            <div class="flex flex-row">
                                <span class="text-gray-700">{{ $album->format }}</span><span class="ml-auto">£{{ $album->price }}</span>
                            </div>
                        @endforeach
                        </div>
                        <div
                            class="text-right mt-auto ml-auto w-24 rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="{{ route('music') . '/' . $albumlisting->id }}" class="flex flex-row align-middle p-2"><span class="m-auto text-xl">Buy
                                </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

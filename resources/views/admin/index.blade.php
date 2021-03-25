<x-app-layout>

    <div class="mt-5">
        <div class="flex flex-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col bg-white rounded-xl shadow overflow-hidden p-6">
                <div class="flex flex-row">
                    <h2 class="text-3xl font-poppins">Album Listings</h2>
                    <div
                        class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                        <a href="REPLACEME" class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">Add New</span></a></div>
                </div>
                @foreach ($albumlistings as $albumlisting)
                    <div class="mb-4">
                        <h3 class="text-xl font-poppins">{{ $albumlisting->artist }} - {{ $albumlisting->name }}
                            </h4>
                            <p class="ml-6">{{ $albumlisting->description }}</p>
                            <div class="flex flex-row gap-4 flex-wrap">
                                @foreach ($albumlisting->albums as $album)
                                    <ul>
                                        <li>{{ $album->format }}</li>
                                        <ul>
                                            @foreach ($album->discs as $disc)
                                                <li>{{ $disc->name }}</li>
                                                <ul>
                                                    @foreach ($disc->tracks as $track)
                                                        <li>{{ $track->name }} ({{ $track->length }})</li>
                                                    @endforeach
                                                </ul>
                                            @endforeach
                                        </ul>
                                    </ul>
                                @endforeach
                            </div>
                    </div>
                @endforeach

            </div>
            <div class="flex flex-col bg-white rounded-xl shadow overflow-hidden p-6">
                <div class="flex flex-row">
                    <h2 class="text-3xl font-poppins">Item Listings</h2>
                    <div
                        class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                        <a href="REPLACEME" class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">Add New</span></a></div>
                </div>
                <ul>
                    @foreach ($itemlistings as $itemlisting)
                        <li>{{ $itemlisting->name }} ({{ $itemlisting->price }})
                            [{{ $itemlisting->keywords }}]</li>
                        <ul>
                            @foreach ($itemlisting->items as $item)
                                <li>{{ $item->size }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col bg-white rounded-xl shadow overflow-hidden p-6">
                <div class="flex flex-row">
                    <h2 class="text-3xl font-poppins">Events</h2>
                    <div
                        class="ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                        <a href="REPLACEME" class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">Add New</span></a></div>
                </div>
                <ul>
                    @foreach ($events as $event)
                        <li>{{ $event->artist }} - {{ $event->name }} ({{ $event->time }} @
                            {{ $event->location }}) [{{ $event->description }}]</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

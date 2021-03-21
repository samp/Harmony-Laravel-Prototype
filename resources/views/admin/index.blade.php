<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                <ul>
                    @foreach($albumlistings as $albumlisting)
                        <li>{{ $albumlisting->artist }} - {{ $albumlisting->name }} ({{ $albumlisting->description }})</li>
                        <ul>
                        @foreach($albumlisting->albums as $album)
                            <li>{{ $album->format }}</li>
                            <ul>
                            @foreach($album->discs as $disc)
                                <li>{{ $disc->name }}</li>          
                                <ul>
                                 @foreach($disc->tracks as $track)
                                    <li>{{ $track->name }} ({{ $track->length}})</li>                           
                                @endforeach         
                                </ul>        
                            @endforeach
                            </ul> 
                        @endforeach
                        </ul> 
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Tracks</h1>
                    @foreach($tracks as $track)
                        <p>{{ $track->disc->album->albumlisting->artist }} - {{ $track->disc->album->albumlisting->name }} ({{ $track->disc->album->format }}) - {{ $track->disc->name}} -> {{ $track->name }} ({{ $track->length }})</p>
                    @endforeach

                    <a href="{{ route('admin.track.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

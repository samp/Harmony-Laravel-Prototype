<x-app-layout>
    <x-slot name="title">
        Discs
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Discs</h1>
                    @foreach($discs as $disc)
                        <p>{{ $disc->album->albumlisting->artist }} - {{ $disc->album->albumlisting->name }} ({{ $disc->album->format }} - {{ $disc->name }})</p>
                        <a href="{{ route('admin.disc') . '/' . $disc->id . '/edit' }}">Update / Delete</a>
                    @endforeach

                    <a href="{{ route('admin.disc.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

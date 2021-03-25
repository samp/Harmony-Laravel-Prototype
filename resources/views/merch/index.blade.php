<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col-reverse sm:grid sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">
                <div class="col-start-4 relative sm:ml-auto text-gray-600">
                <form>
                    <input class="bg-white w-full h-10 px-5 pr-16 rounded-lg shadow text-sm focus:outline-none" type="search" name="search" placeholder="Search" value="{{ Request()->input('search') }}">
                    <button type="submit" class="absolute right-0 h-10 px-4 py-1">
                        <i class="fas fa-search leading-7" aria-hidden="true"></i>
                    </button>
                </div>
                </form>
            </div>
            @forelse ($itemlistings as $itemlisting)
                <p>{{ $itemlisting->name }} {{ $itemlisting->price }}</p>
                @foreach($itemlisting->items as $item)
                    <p>{{ $item->size }} {{ $item->stock }}</p>
                @endforeach
            @empty
            empty.
            @endforelse

            <div class="py-4">
             {{ $itemlistings->links() }}
            </div>

        </div>
    </div>
</x-app-layout>

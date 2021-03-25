<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col-reverse sm:grid sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">
        <div class="col-span-2 flex flex-row gap-2">
                    <div class="p-2 text-xl text-gray-700">
                        <i class="fas fa-filter" aria-hidden="true"></i>
                    </div>
                    @foreach($types as $type)
                        @if($type == $selectedtype)
                        <div
                            class="rounded-md border-2 hover:border-purple-400 hover:bg-white bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500 text-white border-transparent transition-colors">
                            <a href="?type=" class="flex flex-row align-middle p-2"><span
                                    class="m-auto">{{ $type }}</span></a>
                        </div>
                        @else
                        <div
                            class="bg-white rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                            <a href="?type={{ $type }}" class="flex flex-row align-middle p-2"><span
                                    class="m-auto">{{ $type }}</span></a>
                        </div>
                        @endif
                    @endforeach

                </div>
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

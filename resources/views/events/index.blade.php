<x-app-layout>
    <x-slot name="title">
        Events
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-4">
        @foreach ($events as $event)
            <div class="flex flex-row md:flex-col lg:flex-row bg-white rounded-xl shadow overflow-hidden">
                <picture class="w-52 md:w-full lg:w-52">
                    <img alt="{{ $event->description }}" src="/storage/{{ $event->image }}"
                        class="w-full h-full object-cover md:w-64">
                </picture>
                <div class="flex flex-col p-4">
                    <h3 class="font-medium text-xl font-poppins">{{ $event->name }}
                    </h3>
                    <h3 class="font-medium text-lg font-poppins">{{ $event->artist }}
                    </h3>
                    <div class="py-2">
                        <p>
                            {{ \Carbon\Carbon::parse($event->time)->format('jS F Y - h:i A') }}</p>
                        <p>{{ $event->location }}</p>
                    </div>
                    <div
                        class="text-right mt-auto ml-auto w-auto rounded-md border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors">
                        <a href="{{ route('events') . '/' . $event->id }}"
                            class="flex flex-row align-middle p-2 font-poppins"><span class="mx-2 text-xl">More
                            </span><i class="fas fa-arrow-right text-xl leading-7" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="py-4">
        {{ $events->links() }}
    </div>

</x-app-layout>

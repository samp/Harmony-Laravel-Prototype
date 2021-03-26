<x-app-layout>
    <x-slot name="title">
        Carousel
    </x-slot>

    <x-card class="flex-col p-6">
        <div class="flex flex-row items-center justify-between mb-2">
            <h1 class="text-3xl font-poppins">Carousel Items</h1>
            <x-button-link :href="route('admin.carousel.create')" class="ml-4">
                {{ 'Create' }}
            </x-button-link>
        </div>
        @foreach ($carousel as $carouselitem)
            <div class="flex flex-row py-4 justify-between">
                <div>
                    <p>{{ $carouselitem->description }} - {{ $carouselitem->link }}</p>
                </div>
                <div class="ml-4">
                    <x-button-link :href="route('admin.carousel') . '/' . $carouselitem->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
            </div>
        @endforeach
    </x-card>
</x-app-layout>

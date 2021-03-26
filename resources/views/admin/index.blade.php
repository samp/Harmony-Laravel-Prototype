<x-app-layout>
    <x-slot name="title">
        Admin
    </x-slot>

    <div class="flex flex-col gap-4">
        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Carousel</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.carousel.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.carousel')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Album Listings</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.albumlisting.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.albumlisting')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>
        
        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Albums</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.album.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.album')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Discs</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.disc.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.disc')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Tracks</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.track.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.track')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Item Listings</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.itemlisting.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.itemlisting')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Items</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.item.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.item')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>

        <x-card class="flex-row justify-between p-6">
            <h2 class="text-3xl font-poppins">Events</h2>
            <div class="ml-6 my-auto">
                <x-button-link :href="route('admin.event.create')" class="">
                    {{ 'Add new' }}
                </x-button-link>
                <x-button-link :href="route('admin.event')" class="ml-4">
                    {{ 'See all' }}
                </x-button-link>
            </div>
        </x-card>
    </div>
</x-app-layout>

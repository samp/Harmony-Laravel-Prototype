<x-app-layout>
    <x-slot name="title">
        Discs
    </x-slot>

    <x-card class="flex-col p-6">
        <div class="flex flex-row items-center justify-between mb-2">
            <h1 class="text-2xl font-poppins">Discs</h1>
            <x-button-link :href="route('admin.disc.create')" class="ml-4">
                {{ 'Create' }}
            </x-button-link>
        </div>
        @foreach ($discs as $disc)
            <div class="flex flex-row py-4 justify-between">
                <div>
                    <p>{{ $disc->album->albumlisting->artist }} - {{ $disc->album->albumlisting->name }}
                        ({{ $disc->album->format }} - {{ $disc->name }})</p>
                </div>
                <div class="ml-4">
                    <x-button-link :href="route('admin.disc') . '/' . $disc->id . '/edit'">
                        {{ 'Edit' }}
                    </x-button-link>
                </div>
            </div>
        @endforeach
    </x-card>
</x-app-layout>

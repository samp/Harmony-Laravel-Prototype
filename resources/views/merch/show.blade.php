<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col-reverse sm:grid sm:grid-cols-3 md:grid-cols-4 mt-4 gap-4">

                {{ $itemlisting }}

            </div>
        </div>
    </div>
</x-app-layout>

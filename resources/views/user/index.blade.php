<x-app-layout>
    <x-slot name="title">
        User
    </x-slot>

    <div class="flex flex-col gap-4">
        <x-card class="flex flex-col justify-between p-6">
                <div class="font-poppins flex flex-col flex-grow">
                    <h3 class="font-medium text-xl">{{ auth()->user()->name }}</h3>
                    <p class="pt-2 pb-4">We will have information here such as the user's past orders as well as the ability to change their information (name and password)</p>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-button-link :href="route('logout')" onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-button-link>
                    </form>

                </div>
        </x-card>
    </div>
</x-app-layout>

<nav x-data="{ open: false }" class="bg-white dark:bg-truegray-800 shadow font-poppins">
    <!-- Primary Navigation Menu -->
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('index') }}">
                    <img class="block w-auto h-10" src="{{ asset('images/logo.png') }}">
                </a>
            </div>


            <!-- Navigation Links -->
            <div class="hidden sm:-my-px sm:flex sm:max-w-screen-md sm:justify-around w-1/2">
                <x-nav-link :href="route('music')" :active="request()->routeIs('music*')">
                    {{ __('Music') }}
                </x-nav-link>
                <x-nav-link :href="route('events')" :active="request()->routeIs('events')">
                    {{ __('Events') }}
                </x-nav-link>
                <x-nav-link :href="route('merch')" :active="request()->routeIs('merch*')">
                    {{ __('Merch') }}
                </x-nav-link>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex">
                <x-nav-link :href="route('cart')" :active="request()->routeIs('cart*')">
                    {{ __('Cart') }}
                </x-nav-link>
                <div class="hidden sm:flex sm:ml-6">
                    @auth
                        @can('adminAbility')
                            <x-nav-link :href="route('admin')">
                                {{ __('Admin') }}
                            </x-nav-link>
                        @else
                            <x-nav-link :href="route('index')">
                                {{ __('Account') }}
                            </x-nav-link>
                        @endcan
                    @endauth
                    @guest
                        <x-nav-link :href="route('login')">
                            {{ __('Log in') }}
                        </x-nav-link>
                    @endguest
                </div>
            </div>

            <!-- Cart -->
            <div class="flex flex-row">
                <div class="-mr-2 flex items-center sm:hidden">
                    <button
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-truegray-200 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <div class="h-8 w-8"><span class="leading-8 align-middle text-xl"><i
                                    class="fas fa-shopping-cart"></i></span></div>
                    </button>
                </div>
                <!-- Hamburger -->
                <div class="-mr-2 ml-4 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-truegray-200 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('music')" :active="request()->routeIs('music*')">
                {{ __('Music') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('events')" :active="request()->routeIs('events')">
                {{ __('Events') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('merch')" :active="request()->routeIs('merch*')">
                {{ __('Merch') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">

                @can('adminAbility')
                    <x-responsive-nav-link :href="route('admin')">
                        {{ __('Admin') }}
                    </x-responsive-nav-link>
                @else
                    <x-responsive-nav-link :href="route('index')">
                        {{ __('Account') }}
                    </x-responsive-nav-link>
                @endcan



                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        @endauth
        @guest
            <x-responsive-nav-link :href="route('login')">
                {{ __('Log in') }}
            </x-responsive-nav-link>

        @endguest
    </div>
</nav>

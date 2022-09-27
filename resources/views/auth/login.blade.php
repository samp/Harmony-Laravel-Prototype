<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <x-auth-card>

        <x-slot name="logo">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('index') }}">
                    <img class="block w-auto h-20" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mt-4 justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity/50"
                        name="remember">
                    <span class="ml-2 font-open-sans text-gray-600 dark:text-truegray-100">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-gray-600 hover:text-gray-900 dark:text-truegray-100 dark:hover:text-truegray-300" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center mt-4 justify-between">


                <x-button class="ml-auto">
                    <a href="#">
                    {{ __('Log in') }}
                    </a>
                </x-button>
            </div>
        </form>
        <div class="text-center">
            <a class="underline text-gray-600 hover:text-gray-900 dark:text-truegray-100 dark:hover:text-truegray-300" href="{{ route('register') }}">
                {{ __('No account? Register today') }}
            </a>
        </div>
    </x-auth-card>
</x-guest-layout>

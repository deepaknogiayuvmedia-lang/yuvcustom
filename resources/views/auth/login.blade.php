<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ $value }}
        </div>
        @endsession
        <style>
            .custom-heading {
                font-size: 3rem;
                /* Adjust size as needed */
                font-weight: 900;
                text-transform: uppercase;
                  color: #2C73C3;
            }

            .custom-subheading {
                font-size: 1.5rem;
                /* Adjust size as needed */
                color: #2C73C3;
                /* Muted gray color */
            }

        </style>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
             <div class="flex items-center justify-center mt-4">
                <span class="text-sm text-gray-600">New to Portfolio?</span>&nbsp;
                <a class="underline text-sm text-black ml-2" href="{{ route('register') }}">
                    {{ __('Create Account') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

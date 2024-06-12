<x-guest-layout>
    <div class="min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ URL('images/wedding-backdrop.jpg') }}'); padding-top: 5rem; padding-bottom: 5rem;">
        <div class="bg-gray-900 bg-opacity-25 rounded-lg p-8 max-w-md w-full">
            <x-authentication-card>
                <x-slot name="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ URL('images/1.png') }}" alt="Logo" class="mx-auto h-20 w-20">
                    </a>
                </x-slot>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-300" />
                        <x-input id="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-300" />
                        <x-input id="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            <span class="ms-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-300 hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ms-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </x-authentication-card>
        </div>
    </div>
</x-guest-layout>

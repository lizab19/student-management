<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg dark:bg-gray-800">
        @csrf

        <!-- Title -->
        <h2 class="text-center text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">
            Register
        </h2>

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md p-2 text-gray-700 dark:text-gray-300 dark:bg-gray-700" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-md p-2 text-gray-700 dark:text-gray-300 dark:bg-gray-700" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-md p-2 text-gray-700 dark:text-gray-300 dark:bg-gray-700" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-md p-2 text-gray-700 dark:text-gray-300 dark:bg-gray-700" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:underline">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-3 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<x-guest-layout>
    <div class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md dark:bg-gray-900">
        <!-- Form Title -->
        <h2 class="text-center text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">
            Log In
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md text-gray-800 dark:bg-gray-800 dark:text-gray-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md text-gray-800 dark:bg-gray-800 dark:text-gray-200" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 dark:bg-gray-800" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline dark:text-blue-400" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <x-primary-button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md shadow-sm">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
<x-guest-layout>
    <div class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md dark:bg-gray-900">
        <!-- Form Title -->
        <h2 class="text-center text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">
            Log In
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md text-gray-800 dark:bg-gray-800 dark:text-gray-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md text-gray-800 dark:bg-gray-800 dark:text-gray-200" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 dark:bg-gray-800" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline dark:text-blue-400" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <x-primary-button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md shadow-sm">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
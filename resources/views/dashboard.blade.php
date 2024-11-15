<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10 flex justify-center">
        <div class="w-full max-w-md bg-blue-50 dark:bg-gray-800 border border-blue-200 dark:border-gray-600 rounded-lg shadow-lg">
            <div class="p-8 text-center">
                <h3 class="text-xl font-semibold text-blue-700 dark:text-gray-100">{{ __("You're successfully logged in!") }}</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Welcome back! Explore the dashboard to get started.</p>
            </div>
        </div>
    </div>
</x-app-layout>
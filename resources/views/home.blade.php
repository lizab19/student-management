<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-white dark:bg-gray-900 p-4">
        <div class="max-w-xs w-full text-center p-4 bg-gray-50 dark:bg-gray-800 rounded-md shadow-md">

            <h1 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Student Management System</h1>
            
            @if (Route::has('login'))
                <nav class="flex flex-col space-y-2">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="w-full px-3 py-2 text-sm font-semibold text-gray-900 border border-gray-300 rounded-md transition hover:bg-gray-100 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="w-full px-3 py-2 text-sm font-semibold text-gray-900 border border-gray-300 rounded-md transition hover:bg-gray-100 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                        >
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="w-full px-3 py-2 text-sm font-semibold text-gray-900 border border-gray-300 rounded-md transition hover:bg-gray-100 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</x-guest-layout>
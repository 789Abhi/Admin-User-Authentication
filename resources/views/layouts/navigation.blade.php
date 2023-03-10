@if (Route::has('login'))

@auth
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">HOME</a>
                        <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGOUT</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
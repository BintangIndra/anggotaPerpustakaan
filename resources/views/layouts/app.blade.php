<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')    
</head>
<body class="font-sans antialiased">
    <div id="app">
        <nav class="bg-gray-800 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-between">
                    <div class="flex items-center ms-5">
                        @guest
                        <a class="text-lg font-semibold text-gray-100 ms-6" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        @else
                        <ul class="space-x-4">
                            <li><a class="text-gray-300 hover:text-gray-100" href="{{ route('anggota.index') }}">Daftar Anggota</a></li>
                            <!-- Add more navigation links here -->
                        </ul>
                        @endguest
                    </div>
                    <div class="flex items-center">
                        <!-- Authentication Links -->
                        @guest
                            <a class="text-gray-300 hover:text-gray-100" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="text-gray-300 hover:text-gray-100 ml-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <button class="text-gray-300 hover:text-gray-100 focus:outline-none me-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <a class="text-white me-4" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <main class="my-8">
            @yield('content')
        </main>
    </div>

    <!-- Include Tailwind CSS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
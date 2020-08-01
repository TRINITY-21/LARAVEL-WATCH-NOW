<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchNow</title>

    @livewireStyles
    <link rel="stylesheet" href="/css/main.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <img src="https://img.icons8.com/cotton/100/000000/circled-play.png"/><span><strong><h1>Watch<span style="color: brown">Now</span></h1></strong></span>


                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex  items-center">
                <livewire:search-dropdown>
                    <div class="md:ml-4 ml-2 mt-3 md:mt-0">
                        <a href="#">
                            <img src="/img/avatar.JPG" class="rounded-full w-8 h-8" alt="portrait">
                        </a>
                    </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <livewire:scripts>
    @yield('scripts')
</body>
</html>

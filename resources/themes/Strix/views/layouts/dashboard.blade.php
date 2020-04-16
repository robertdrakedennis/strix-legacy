<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Strix') }} - Dashboard</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">

    <!-- Temporary Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a15f8320c7.js" integrity="sha384-sdW0UABlGL/9KQ4BDukeeDLSnorveN3XcZw17Jd9zszo705y17ZcnfoCQnSQTb5+" crossorigin="anonymous"></script>

    <!-- Styles -->
{!! Theme::css('css/app.css?v={cache-version}') !!}

<!-- Scripts -->
    @if(app()->environment() !== 'Production')
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    @endif
</head>

<body class="antialiased leading-none font-sans antialiased">

<div id="app">
    <div class="relative">
        <div class="flex">
            <div class="flex flex-col flex-none bg-gray-900 min-h-screen w-56 h-screen">
                <ul class="list-reset flex flex-col text-center md:text-left overflow-hidden">
                    <li>
                        <div class="py-12 px-6 text-center">
                            <img src="https://laravel.com/assets/img/laravel-logo-white.png" class="object-fit object-center mx-auto " alt=test"">
                        </div>
                    </li>

                    <li class="bg-gray-800 overflow-hidden py-3 pl-4 text-gray-300">General</li>

                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-home fa-fw"></i>
                            <span class="ml-2 text-sm">Overview</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-tachometer-alt fa-fw"></i>
                            <span class="ml-2 text-sm">Statistics</span>
                        </a>
                    </li>

                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-cogs fa-fw"></i>
                            <span class="ml-2 text-sm">Settings</span>
                        </a>
                    </li>

                    <li class="bg-gray-800 overflow-hidden py-3 pl-4 text-gray-300">Modules</li>

                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-boxes fa-fw"></i>
                            <span class="ml-2 text-sm">Core</span>
                        </a>
                    </li>

                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-file-alt fa-fw"></i>
                            <span class="ml-2 text-sm">Index</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-rss-square fa-fw"></i>
                            <span class="ml-2 text-sm">Blogs</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-code-branch fa-fw"></i>
                            <span class="ml-2 text-sm">Commits</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="flex flex-none items-center pl-3 py-3 align-middle text-gray-500">
                            <i class="fas fa-comments fa-fw"></i>
                            <span class="ml-2 text-sm">Forums</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex-1 flex flex-col min-h-screen h-screen">
                <div class="flex text-white h-16 bg-gray-900">

                </div>

                <div class="flex-1 flex overflow-y-hidden">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</div>

{!! Theme::js('js/app.js?v={cache-version}') !!}
</body>
</html>

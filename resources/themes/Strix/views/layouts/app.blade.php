<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-custom-color-primary-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Strix') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">

    <!-- Temporary Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a15f8320c7.js" integrity="sha384-sdW0UABlGL/9KQ4BDukeeDLSnorveN3XcZw17Jd9zszo705y17ZcnfoCQnSQTb5+" crossorigin="anonymous"></script>

    <!-- Styles -->
{!! Theme::css('css/app.css?v={cache-version}') !!}

<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>

<body class="antialiased leading-none font-sans antialiased text-custom-primary">

<div id="app">

    <div id="wrapper" class="relative">
        <div class="relative">
            <div class="fixed top-0 left-0 right-0 z-30">

                <!-- header -->
                <navbar-component></navbar-component>

            </div>
        </div>

        @yield('content')

        <footer class="px-0 py-20 bg-custom-color-footer-bg">
            <div class="container mx-auto">
                <div class="flex flex-col xl:flex-row">

                    <div class="md:w-full lg:w-1/2 xl:w-1/4 block flex-grow flex-shrink p-4">
                        <div class="flex items-center">
                            <a href="#" class="bg-custom-color-accent p-5 mb-5">
                                <img src="https://i.imgur.com/cwzWGfC.png" alt="sandbox" height="32px" width="32px">
                            </a>
                        </div>
                        <span class="text-custom-primary leading-tight">
                        © 2019 Your Copyright.
                        All rights reserved.
                    </span>
                    </div>

                    <div class="md:w-full lg:w-1/2 xl:w-1/4 block flex-grow flex-shrink p-4">
                        <span class="block uppercase text-sm leading-tight font-display border-b-2 border-custom-color-border py-4 mr-12 mb-4 text-custom-footer-header">Here</span>
                        <ul class="list-none m-0 p-0" style="line-height: 40px;">
                            <li>
                                <a href="#" class="text-custom-footer-link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-footer-link">Commits</a>
                            </li>
                        </ul>
                    </div>

                    <div class="md:w-full lg:w-1/2 xl:w-1/4 block flex-grow flex-shrink p-4">
                        <span class="block uppercase text-sm leading-tight font-display border-b-2 border-custom-color-border py-4 mr-12 mb-4 text-custom-footer-header">Here</span>
                        <ul class="list-none m-0 p-0" style="line-height: 40px;">
                            <li>
                                <a href="#" class="text-custom-footer-link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-footer-link">Our Projects</a>
                            </li>

                            <li>
                                <a href="#" class="text-custom-footer-link">Blog RSS</a>
                            </li>

                            <li>
                                <a href="#" class="text-custom-footer-link">Legal</a>
                            </li>
                        </ul>
                    </div>

                    <div class="md:w-full lg:w-1/2 xl:w-1/4 block flex-grow flex-shrink p-4">
                        <span class="block uppercase text-sm leading-tight font-display border-b-2 border-custom-color-border py-4 mr-12 mb-4 text-custom-footer-header">Here</span>
                        <ul class="list-none m-0 p-0" style="line-height: 40px;">
                            <li>
                                <a href="#" class="text-custom-footer-link">Twiiter</a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-footer-link">Steam</a>
                            </li>

                            <li>
                                <a href="#" class="text-custom-footer-link">Facebook</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</div>

{!! Theme::js('js/app.js?v={cache-version}') !!}
</body>
</html>

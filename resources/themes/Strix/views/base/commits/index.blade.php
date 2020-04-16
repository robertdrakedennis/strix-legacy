@extends('layouts.app')

@section('content')
    <div class="relative">
        <div>
            <div class="relative">
                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg pt-24">
                    <div class="block flex-grow flex-shrink-0 py-12 px-6">
                        <div class="container mx-auto text-center">
                            <h1 class="mb-6 font-display text-4xl text-custom-primary">Commits</h1>
                            <span class="-mt-5 font-default text-custom-primary-body">A list of all of our commits</span>
                        </div>
                    </div>
                </section>

                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary">
                    <div class="block flex-grow flex-shrink-0 py-12 px-6">
                        <div class="container mx-auto">
                            <div class="mb-8">
                                <div class="flex items-center justify-between text-center">
                                    <nav class="flex flex-wrap flex-grow flex-shrink items-center content-end">
                                        <div class="text-uppercase mx-4 min-w-10 ml-auto">
                                            Page 1 of 511
                                        </div>
                                        <a href="#" class="inline-flex relative align-top px-4 py-2 items-center rounded-btn h-10 order-1 mx-2 -px-3 whitespace-no-wrap min-w-10 bg-custom-color-accent">
                                            <i class="fas fa-chevron-left fa-fw"></i>
                                        </a>
                                        <a href="#" class="inline-flex relative align-top px-4 py-2 items-center rounded-btn h-10 order-2 mx-2 -px-3 whitespace-no-wrap min-w-10 bg-custom-color-accent">
                                            <i class="fas fa-chevron-right fa-fw"></i>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <div class="w-full flex items-center content-center">
                                <!-- commits per day container -->
                                <div class="mb-4 mx-auto">
                                    <div>
                                        <h1 class="font-display text-custom-primary text-3xl my-6">Friday, August 5, 2019</h1>

                                        <article class="flex items-center text-left py-6">
                                            <div class="block relative overflow-auto lg:overflow-hidden mr-4" style="height: 32px; width: 32px">
                                                <img src="https://i.imgur.com/R9yYNJx.jpg" alt="profile picture" class="block h-auto w-full rounded-full" >
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="text-left font-default mb-2 leading-tight">
                                                    <span class="font-display text-custom-primary">John Doe</span>
                                                    <span class="text-custom-primary-body mx-1">13:23</span>
                                                    <span class="text-custom-primary-body">/commit-example-branch/123456</span>
                                                </div>
                                                <ul class="list-none">
                                                    <li class="text-custom-primary-body font-default">
                                                       Commit example
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>

                                        <article class="flex items-center text-left py-6 border-t-2 border-custom-color-border">
                                            <div class="block relative overflow-auto lg:overflow-hidden mr-4" style="height: 32px; width: 32px">
                                                <img src="https://i.imgur.com/R9yYNJx.jpg" alt="profile picture" class="block h-auto w-full rounded-full" >
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="text-left font-default mb-2 leading-tight">
                                                    <span class="font-display text-custom-primary">John Doe</span>
                                                    <span class="text-custom-primary-body mx-1">13:23</span>
                                                    <span class="text-custom-primary-body">/commit-example-branch/123456</span>
                                                </div>
                                                <ul class="list-none">
                                                    <li class="text-custom-primary-body font-default">
                                                        Commit example
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

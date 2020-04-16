@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="bg-custom-color-primary-bg">
            <div class="relative">

                <!-- hero section -->
                <div class="relative w-full">
                    <!-- video background -->
                    <div class="absolute inset-0 overflow-hidden z-0 pointer-events-none theme-filter-gradient theme-filter-backdrop">
                        <video preload="auto" autoplay="autoplay" muted="muted" loop="loop" playsinline="" class="absolute h-auto w-auto min-w-full min-h-full" style="
                            max-width: 10000%;
                            max-height: 10000%;
                            top: 50%;
                            left: 50%;
                            -webkit-transform: translate(-50%,-50%);
                            -ms-transform: translate(-50%,-50%);
                            transform: translate(-50%,-50%);">
                            <source type="video/mp4" src="https://quub.io/storage/test_video.mp4">
                        </video>

                        {{--                            <div class="absolute z-0 overflow-hidden pointer-events-none -inset-16 theme-filter-backdrop theme-filter-gradient bg-cover bg-center" style=" background-image: url(https://images.unsplash.com/photo-1563212107-c3678100a453);"></div>--}}
                    </div>

                    <!-- overlay -->
                    <section class="flex items-stretch flex-col justify-between min-h-screen">
                        <div class="flex flex-grow items-center flex-shrink-0 z-20 py-12 px-6">
                            <div class="container mx-auto">
                                <div class="flex flex-col lg:flex-row">
                                    <div class="w-full lg:w-1/2 block flex-grow flex-shrink p-3">
                                        <img src="https://asapgaming.co/assets/media/logo/color.svg" alt="logo" class="h-auto max-w-full" style="max-height: 200px;">
                                    </div>
                                    <div class="w-full lg:w-1/2 block flex-grow flex-shrink p-3">
                                        <div class="text-xl text-gray-200 font-medium">
                                            <p class="mb-5 leading-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            <p class="mb-5 leading-normal">velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Extra Blogs -->
                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg">
                    <div class="py-32 py-6">
                        <div class="container mx-auto">
                            <div class="flex flex-col lg:flex-row flex-shrink-0 flex-wrap">

                                <div class="w-full lg:w-1/3 p-3">
                                    <div class="py-20 px-10 text-center bg-custom-tile-gradient">
                                        {{--                                        <img src="replace_me" alt="logo" class="h-auto max-w-full" style="max-height: 200px;">--}}
                                        <i class="fab fa-steam fa-6x fa-fw mx-auto mb-8"></i>
                                        <h2 class="mb-12 font-display text-3xl text-custom-primary">Header</h2>
                                        <p class="mb-8 leading-normal font-default -mt-5">
                                            Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/3 p-3">
                                    <div class="py-20 px-10 text-center bg-custom-tile-gradient">
                                        {{--                                        <img src="replace_me" class="mb-8 h-auto mx-auto" style="max-width: 160px;" alt="Image">--}}
                                        <i class="fab fa-steam fa-6x fa-fw mx-auto mb-8"></i>
                                        <h2 class="mb-12 font-display text-3xl text-custom-primary">Header</h2>
                                        <p class="mb-8 leading-normal font-default -mt-5">
                                            Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/3 p-3">
                                    <div class="py-20 px-10 text-center bg-custom-tile-gradient">
                                        {{--                                        <img src="replace_me" class="mb-8 h-auto mx-auto" style="max-width: 160px;" alt="Image">--}}
                                        <i class="fab fa-steam fa-6x fa-fw mx-auto mb-8"></i>
                                        <h2 class="mb-12 font-display text-3xl text-custom-primary">Header</h2>
                                        <p class="mb-8 leading-normal font-default -mt-5">
                                            Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Latest Post Section -->
                <latest-blog-component
                    title="Header"
                    description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                    image="https://i.imgur.com/EjCump5.jpg"
                    category="category"
                    date="{{ now() }}"></latest-blog-component>

                <!-- Mailing List -->
                <mailing-list-component></mailing-list-component>


                <!-- Extra Blogs -->
                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg">
                    <div class="block flex-grow flex-shrink-0 py-32 px-6">
                        <div class="container mx-auto">
                            <h1 class="relative text-gray-200 font-bold leading-normal text-2xl mb-5 py-5">More Updates</h1>
                            <div>
                                <div class="flex flex-col lg:flex-row flex-wrap">

                                    <div class="block w-full lg:w-1/3 p-3 flex-none">
                                        <blog-card-component
                                            title="Header"
                                            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                                            image="https://i.imgur.com/EjCump5.jpg"
                                            category="Category"
                                            date="{{ now() }}"></blog-card-component>
                                    </div>

                                    <div class="block w-full lg:w-1/3 p-3 flex-none">
                                        <blog-card-component
                                            title="Header"
                                            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                                            image="https://i.imgur.com/EjCump5.jpg"
                                            category="Category"
                                            date="{{ now() }}"></blog-card-component>
                                    </div>

                                    <div class="block w-full lg:w-1/3 p-3 flex-none">
                                        <blog-card-component
                                            title="Header"
                                            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                                            image="https://i.imgur.com/EjCump5.jpg"
                                            category="Category"
                                            date="{{ now() }}"></blog-card-component>
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

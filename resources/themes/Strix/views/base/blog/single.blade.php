@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="bg-custom-color-primary-bg">
            <div class="relative">
                <!-- hero section -->
                <div class="relative w-full">
                    <!-- video background -->
                    <section class="relative flex items-stretch justify-between overflow-hidden min-h-screen p-16">

                        <div class="absolute z-0 overflow-hidden pointer-events-none bg-cover bg-center -inset-16 theme-filter-backdrop theme-filter-gradient"
                             style="background-image: url(https://i.imgur.com/EjCump5.jpg);">
                        </div>

                        <section class="flex w-full items-stretch flex-col justify-between">

                            <div class="flex flex-grow items-center flex-shrink-0 z-20 py-12 px-6">
                                <div class="container mx-auto">
                                    <div class="flex flex-col">
                                        <div class="w-full block flex-grow flex-shrink p-3 text-center">
                                            <div class="block mb-4">
                                                <span class="inline-block text-sm font-btn text-custom-accent bg-custom-color-accent rounded-btn px-3 py-1 mr-4">category</span>
                                            </div>
                                            <span class="text-custom-primary-body text-sm">{{ now() }}</span>
                                            <h1 class="text-custom-primary text-6xl font-display leading-normal mb-6">Header</h1>
                                            <p class="text-custom-primary-body text-sm">Lorem ipsum..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </section>

                    <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg min-h-screen">

                        <div class="container mx-auto">
                            <div class="w-full p-3">
                                <p class="text-custom-primary-body">
                                    Lorem Ipsum...
                                </p>
                            </div>
                        </div>

                    </section>

                    <!-- Mailing List -->
                    <mailing-list-component></mailing-list-component>

                    <!-- Extra Blogs -->
                    <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg">

                        <div class="block flex-grow flex-shrink-0 py-32 px-6">
                            <div class="container mx-auto">
                                <h1 class="relative text-custom-primary font-display leading-normal text-2xl mb-5 py-5">More Updates</h1>
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
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="relative">
        <div class="bg-custom-color-primary-bg">
            <div class="relative">

                <!-- Latest Post Section -->
                <latest-blog-component
                    title="Header"
                    description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                    image="https://i.imgur.com/EjCump5.jpg"
                    category="category"
                    date="{{ now() }}"></latest-blog-component>

                <!-- Few Extra Blogs -->
                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg">
                    <div class="block flex-grow flex-shrink-0 py-12 px-6">
                        <div class="container mx-auto">
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

                <!-- categories & all posts -->
                <section class="relative flex flex-col justify-between items-stretch bg-custom-color-primary-bg">
                    <div class="block flex-grow flex-shrink-0 py-12 px-6">
                        <div class="container mx-auto">
                            <div class="flex">
                                <div class="invisible w-0 lg:visible lg:w-1/4 p-0 lg:p-3">
                                    <div class="block flex mb-10">
                                        <span class="relative inline-block text-custom-primary font-default mb-0 leading-tight px-0 py-4 text-xl">Options</span>
                                    </div>
                                    <div class="block px-4 py-8 bg-custom-color-primary rounded-lg">
                                        <p class="block font-display leading-tight py-0 px-4 mb-4 text-custom-primary">
                                            Categories
                                        </p>
                                        <ul class="list-none m-0 p-0">
                                            <li class="py-4 px-8">
                                                <a href="#" class="my-2 rounded-full font-default justify-between text-custom-primary-body flex items-center transition-all">General <span class="rounded-full p-1">5</span></a>
                                            </li>
                                            <li class="py-4 px-8">
                                                <a href="#" class="my-2 rounded-full font-default justify-between text-custom-primary-body flex items-center transition-all">General <span class="rounded-full p-1">5</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="w-full lg:w-3/4 p-3">

                                    <div class="block flex mb-10">
                                        <span class="relative inline-block text-custom-primary mb-0 leading-tight px-0 py-4 text-xl">Options</span>
                                    </div>

                                    <div class="flex flex-wrap flex-shrink-0 flex-col lg:flex-row -mt-3">

                                        <div class="block w-full lg:w-1/2 p-3 flex-none">
                                            <blog-card-component
                                                title="Header"
                                                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                                                image="https://i.imgur.com/EjCump5.jpg"
                                                category="Category"
                                                date="{{ now() }}"></blog-card-component>
                                        </div>

                                        <div class="block w-full lg:w-1/2 p-3 flex-none">
                                            <blog-card-component
                                                title="Header"
                                                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
                                                image="https://i.imgur.com/EjCump5.jpg"
                                                category="Category"
                                                date="{{ now() }}"></blog-card-component>
                                        </div>

                                        <div class="block w-full lg:w-1/2 p-3 flex-none">
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
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

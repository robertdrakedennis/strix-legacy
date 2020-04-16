<template>
    <section class="relative flex flex-col items-stretch justify-between overflow-hidden">

        <!-- post background -->
        <div class="block absolute overflow-hidden z-0 pointer-events-none bg-cover bg-center -inset-16 theme-filter-gradient theme-filter-backdrop"
             :style="`background-image: url(${image})`">
        </div>

        <div class="block flex-grow flex-shrink-0 px-6 py-32">

            <div class="container mx-auto">

                <div class="flex flex-col">

                    <h1 class="relative text-custom-primary font-display leading-normal text-2xl mb-5 py-5">Latest Post</h1>

                    <div class="relative w-full lg:max-w-full flex flex-col lg:flex-row lg:h-80">

                        <div class="w-full shadow-lg flex-none h-48 lg:h-auto bg-cover bg-center text-center overflow-hidden rounded-t-lg lg:rounded-t-none rounded-l-none lg:rounded-l-lg"
                             :style="`background-image: url(${image})`" :title="`${title}`">
                        </div>

                        <div class="relative lg:absolute inset-auto lg:top-0 lg:right-0 lg:bottom-0 bg-custom-blog-gradient rounded-r-none lg:rounded-r-lg rounded-b-lg lg:rounded-b-none py-3 px-5 lg:py-12 lg:px-20 flex flex-col justify-between leading-normal max-w-full lg:max-w-xl">

                            <div class="flex flex-col text-left h-full justify-center">
                                <div class="py-4">
                                    <a href="#">
                                        <div class="font-display text-4xl text-custom-primary mb-2">{{ title }}</div>
                                    </a>
                                    <p class="text-custom-primary-body text-base leading-tight">
                                        {{ description }}
                                    </p>
                                </div>

                                <div class="py-4">
                                    <span class="inline-block text-sm font-btn text-custom-accent bg-custom-color-accent rounded-btn px-3 py-1 mr-4">{{ category }}</span>
                                    <span class="inline-block text-sm font-normal text-custom-primary-body mr-2">{{ date }}</span>
                                </div>

                                <div class="py-4">
                                    <button type="button" class="text-xl px-6 py-4 uppercase bg-custom-color-accent text-custom-accent font-btn rounded-btn">Read More</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "LatestBlogComponent",
        props: ["title", "description", "image", "category", "date"],
    }
</script>

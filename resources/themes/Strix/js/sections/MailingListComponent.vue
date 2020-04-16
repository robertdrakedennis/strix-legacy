<template>
    <section class="relative flex flex-col justify-between items-stretch overflow-hidden">
        <!-- section background -->
        <div class="absolute block z-0 overflow-hidden inset-0 pointer-events-none bg-cover bg-center theme-filter-backdrop"
             style="background-image: url(https://i.imgur.com/EjCump5.jpg);">
        </div>

        <div class="block flex-grow flex-shrink-0 z-20 py-32 py-6" style="padding: 9rem 1.5rem;">

            <div class="container mx-auto">

                <div class="flex flex-col lg:flex-row">

                    <div class="w-full lg:w-1/2 block flex-grow flex-shrink p-3">
                        <h1 class="text-custom-primary text-4xl mb-3 font-display">Mailing List</h1>
                        <p class="text-custom-primary-body leading-normal font-normal">
                            If you want to follow this project you can sign up to the mailing list.
                        </p>
                        <p class="text-custom-primary-body leading-normal font-normal">
                            We'll only update you about this project, we won't spam you about other stuff or sell your email address.
                        </p>
                    </div>

                    <div class="w-full lg:w-1/2 block flex-grow flex-shrink p-3">
                        <form>
                            <div class="flex flex-wrap mb-3">
                                <div class="w-full p-3">
                                    <input class="appearance-none border-2 w-full py-2 px-3 bg-custom-color-primary border-custom-color-primary-highlight text-gray-200 leading-tight focus:outline-none focus:border-custom-color-accent" id="email" type="text" placeholder="Email">
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-3">
                                <div class="w-1/2 p-3">
                                    <input class="appearance-none border-2 w-full py-2 px-3 bg-custom-color-primary border-custom-color-primary-highlight text-gray-200 leading-tight focus:outline-none focus:border-custom-color-accent" id="first_name" type="text" placeholder="First Name">
                                </div>
                                <div class="w-1/2 p-3">
                                    <input class="appearance-none border-2 w-full py-2 px-3 bg-custom-color-primary border-custom-color-primary-highlight text-gray-200 leading-tight focus:outline-none focus:border-custom-color-accent" id="last_name" type="text" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-3 p-3">
                                <div class="w-full p-3">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-white">I agree to the <span class="underline text-blue-600">privacy policy</span></span>
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-3 p-3">
                                <div class="text-left p-3">
                                    <button type="button" class="text-xl px-6 py-4 uppercase bg-custom-color-accent text-custom-accent font-btn rounded-btn">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
    export default {
        name: "MailingListComponent"
    }
</script>

<style scoped>

</style>

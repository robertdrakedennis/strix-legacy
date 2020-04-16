<template>

    <div class="fixed flex items-stretch top-0 left-0 right-0 z-30 h-20 transition-all" id="navbar">
        <div class="container flex items-stretch w-full mx-auto">
            <div class="flex flex-shrink-0 items-stretch -ml-3">
                <a href="#" class="relative flex items-center flex-shrink-0 flex-grow-0 mx-4 py-2 px-3">
                    <img class="h-auto w-4" src="https://i.imgur.com/cwzWGfC.png" alt="" style="max-height: 1.75rem;">
                </a>
            </div>
            <div class="flex flex-grow flex-shrink-0 items-stretch -ml-3">
                <div class="flex items-stretch ml-auto justify-end">
                    <a href="#" class="relative text-custom-accent hover:bg-custom-color-accent transition-all flex items-center flex-shrink-0 flex-grow-0 py-2 px-3 font-body">
                        <span>Blog</span>
                    </a>
                    <a href="#" class="relative text-custom-accent hover:bg-custom-color-accent transition-all flex items-center flex-shrink-0 flex-grow-0 py-2 px-3 font-body">
                        <span>Commits</span>
                    </a>
                    <a href="#" class="relative text-custom-accent hover:bg-custom-color-accent transition-all flex items-center flex-shrink-0 flex-grow-0 py-2 px-3 font-body">
                        <span>Support</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'NavbarComponent',

    mounted: function () {

        window.addEventListener('scroll', () => {

            let el = document.getElementById('navbar');

            if (window.scrollY > 100) {
                el.classList.add('header-scroll');
            } else {
                el.classList.remove('header-scroll');
            }
            return window.scrollY > 100
        });
    },
};
</script>

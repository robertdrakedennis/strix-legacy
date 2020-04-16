<template>
    <div class="rounded-lg overflow-hidden shadow-lg bg-custom-color-primary h-full flex flex-col">
        <a href="#">
            <img class="w-full object-cover object-center h-48" :src="`${image}`" alt="text">
        </a>
        <div class="px-6 py-4">
            <a href="#">
                <div class="font-display text-xl text-custom-primary mb-2">{{ title }}</div>
            </a>
            <p class="text-custom-primary-body text-base leading-tight">
                {{ description }}
            </p>
        </div>
        <div class="px-6 py-4">
            <span class="inline-block text-sm font-btn text-custom-accent bg-custom-color-accent rounded-btn px-3 py-1 mr-4">{{ category }}</span>
            <span class="inline-block text-sm font-normal text-custom-primary-body mr-2">{{ date }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BlogCardComponent",
        props: ["title", "description", "image", "category", "date"]
    }
</script>

<style scoped>

</style>

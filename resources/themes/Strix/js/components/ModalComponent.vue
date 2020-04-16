<template>
    <div :id="name" class="overlay absolute inset-0 flex items-center justify-center">
        <a href="#" class="cancel absolute h-full w-full"></a>

        <div class="modal relative bg-white rounded p-10 shadow">
            <a href="#" class="close absolute text-gray-400">&times;</a>

            <slot></slot>

            <footer class="flex justify-end">
                <slot name="footer"></slot>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ModelComponent",
        props: ["name"],
    }
</script>

<style scoped>
    .overlay {
        visibility: hidden;
        background: rgba(0, 0, 0, .4);
        transition: opacity .3s;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .modal {
        width: 500px;
        max-width: 80%;
    }

    .modal .close {
        top: 15px;
        right: 15px;
        color: grey;
    }

    .overlay .cancel {

    }
</style>

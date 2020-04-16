<template>
    <div class="dropdown relative">
        <div @click.prevent="isOpen = ! isOpen" aria-haspopup="true" :aria-expanded="isOpen">
            <slot name="trigger"></slot>
        </div>

        <transition name="pop-out-quick">
            <ul class="absolute bg-gray-200 shadow rounded mt-2 list-reset z-10 w-40" v-show="isOpen">
                <slot></slot>
            </ul>
        </transition>
    </div>
</template>

<script>
    export default {
        name: "DropdownComponent",
        data() {
            return {
                isOpen: false
            };
        },

        watch: {
            isOpen(isOpen) {
                if (isOpen) {
                    document.addEventListener('click', this.closeIfClickedOutside);
                }
            }
        },

        methods: {
            closeIfClickedOutside(event) {

                if (! event.target.closest('.dropdown')) {
                    this.isOpen = false;
                }
            }
        }
    }
</script>

<style scoped>
    .pop-out-quick-enter-active,
    .pop-out-quick-leave-active {
        transition: all 0.2s;
    }

    .pop-out-quick-enter,
    .pop-out-quick-leave-active {
        opacity: 0;
        transform: translateY(-7px);
    }
</style>

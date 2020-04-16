<template>
    <div role="tabpanel" class="fade" v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "TabComponent",
        props: {
            title: {},
            active: { type: Boolean, default: false }
        },
        data() {
            return {
                isActive: this.active
            };
        }
    }
</script>

<style scoped>
</style>

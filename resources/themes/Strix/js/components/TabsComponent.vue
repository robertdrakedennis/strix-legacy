<template>
    <div>
        <ul class="flex mb-4" role="tablist">
            <li v-for="(tab, index) in tabs"
                class="px-4 py-2 bg-white transition-all border-b-2 border-transparent"
                :class="{ 'border-b-2 border-red-400': tab.isActive }">
                <button
                    v-text="tab.title"
                    class="focus:outline-none"
                    role="tab"
                    :aria-selected="tab.isActive"
                    @click="activeTab = tab"></button>
            </li>
        </ul>

        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "TabsComponent",
        data() {
            return {
                tabs: [],
                activeTab: null
            }
        },
        mounted() {
            this.tabs = this.$children;
            this.setInitialActiveTab();
        },
        watch: {
            activeTab(activeTab) {
                this.tabs.map(tab => (tab.isActive = tab == activeTab));
            }
        },
        methods: {
            setInitialActiveTab() {
                this.activeTab = this.tabs.find(tab => tab.active) || this.tabs[0];
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div class="flex flex-col h-full">
        <Header />
        <slot />
    </div>
</template>

<script>
import Header from "../Shared/Header.vue";
// import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Header,
    },
    props: { name: String },
};
</script>

<style>
#app,
body {
    height: 100%;
}
</style>

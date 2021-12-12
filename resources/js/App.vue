<template>
    <div class="flex flex-col h-full">
        <Header />
        <router-view />
    </div>
</template>

<script>
import Header from "./components/Header.vue";
export default {
    components: {
        Header,
    },
};
</script>

<style>
#app,
body {
    height: 100%;
}
</style>

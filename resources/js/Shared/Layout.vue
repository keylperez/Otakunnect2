<template>
    <div class="h-full flex flex-col">
        <Header />
        <slot />
    </div>
</template>

<script>
import Header from "./Header.vue";
export default {
    components: { Header },
};
</script>

<style></style>

<template>
    <Head><title>OtaKunnect</title></Head>
    <div class="h-full flex flex-col">
        <Header />
        <slot />
    </div>
</template>

<script setup>
import Header from "./Header.vue";
</script>

<style></style>

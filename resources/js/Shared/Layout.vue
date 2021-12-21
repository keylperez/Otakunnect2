<template>
    <Head><title>OtaKunnect</title></Head>
    <div
        class="
            min-h-screen
            h-full
            max-h-full
            flex flex-col
            top-0
            right-0
            left-0
            bottom-0
        "
    >
        <Header />
        <div
            class="
                relative
                flex
                grow
                w-full
                h-full
                min-h-full min-w-full
                flex-1
            "
        >
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
</script>

<style></style>

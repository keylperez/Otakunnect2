<template>
    <!-- <Head title="item" /> -->
    <Layout>
        {{ item[0].product_name }}
        {{ item[0].img }}
        ₱{{ item[0].price }}
    </Layout>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3";
defineProps({
    item: Object,
});
</script>

<style></style>

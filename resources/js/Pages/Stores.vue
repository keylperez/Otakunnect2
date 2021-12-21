<template>
    <Head>
        <title>Stores</title>
    </Head>
    <Layout>
        <div class="relative min-h-full h-full grow">
            <StoreItem
                v-for="item in items"
                :key="item.store_id"
                :item="item"
            /></div
    ></Layout>
</template>

<script>
import StoreItem from "../Shared/StoreItem.vue";

export default {
    components: { StoreItem },
    props: {
        items: Object,
    },
};
</script>

<style></style>

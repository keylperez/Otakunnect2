<template>
    <Head>
        <title>Stores</title>
    </Head>
    <Layout>
        <div>
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
    props: { items: Object },
    components: {
        StoreItem,
    },
    mounted() {
        console.log(this.items);
    },
};
</script>

<style></style>

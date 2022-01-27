<template>
    <Head>
        <title>
            
        </title>
    </Head>
    <Layout>
        Store name: {{ storeInfo.name }}
        <CardItem
            v-for="item in items"
            :key="item.product_id"
            :item="item"
        />
    </Layout>
</template>

<script>
import CardItem from "../Shared/CardItem.vue";

export default {
    props: {
        items: Object,
        storeInfo: Object
    },
    components:{
        CardItem,
    },
};
</script>

<style></style>

<template>
    <Head>
        <title>
            
        </title>
    </Head>
    <Layout>
        Store name: {{ $page.props.storeInfo[0].name }}
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
    },
    components:{
        CardItem,
    },
};
</script>

<style></style>

<template>
    <Head>
        <title>Home</title>
    </Head>
    <Layout>
        <div
            class="bg-fixed bg-contain relative"
            :style="{
                'background-image': `url(${bannerURL})`,
            }"
        >
            <div>
                <img :src="bannerURL" alt="banner" class="opacity-0 w-4/5" />
            </div>
            <div
                class="bg-contain bg-fixed shadow-2xl shadow-gray-400 pb-10"
                :style="{
                    'background-image':
                        'url(../../img/home/OtakuWallpaper-gary.jpg)',
                }"
            >
                <div v-if="$page.props.auth" class="mx-5">
                    <div class="mx-5" v-if="prefItems">
                        <div class="pt-10">
                            <h1 class="text-6xl">Preferred Items</h1>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <CardItem
                            v-for="item in prefItems"
                            :key="item.product_id"
                            :item="item"
                        />
                    </div>
                </div>
                <div class="mx-5">
                    <div class="mx-5">
                        <div class="pt-10">
                            <h1 class="text-6xl">Items for you</h1>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <CardItem
                            v-for="item in items"
                            :key="item.product_id"
                            :item="item"
                        />
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
<script setup>
import CardItem from "../Shared/CardItem.vue";
import { ref } from "vue";

defineProps({
    items: Object,
    prefItems: Object,
});
const bannerURL = ref("../../img/home/OtakunnectBanner.png");
</script>

<style></style>

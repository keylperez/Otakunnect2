<template>
    <layout>
        <div
            class="bg-fixed"
            :style="{
                'background-image': `url(${bannerURL})`,
            }"
        >
            <div>
                <img :src="bannerURL" alt="banner" class="opacity-0" />
            </div>
            <div
                class="bg-contain bg-fixed shadow-2xl shadow-gray-400"
                :style="{
                    'background-image':
                        'url(../../img/home/OtakuWallpaper-gary.jpg)',
                }"
            >
                <div class="mx-5">
                    <div class="mx-5">
                        <div class="pt-10">
                            <h1 class="text-6xl">Items for you</h1>
                        </div>
                    </div>
                    <div class="">
                        <CardItem
                            :item="{
                                name: 'Dog',
                                price: 2,
                                img: 'https://i.imgur.com/PJWlask.jpg',
                            }"
                        />
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import CardItem from "../Shared/CardItem.vue";
import Header from "../Shared/Header.vue";
import { ref } from "vue";

export default {
    setup() {
        const bannerURL = ref("../../img/home/OtakunnectBanner.png");
        return {
            bannerURL,
        };
    },
    components: {
        CardItem,
        Header,
    },
};
</script>

<style></style>

<template>
    <Head :title="store.name" />
    <Layout>
        <div
            class="bg-fixed bg-contain relative"
            :style="{
                'background-image': `url(${bannerURL})`,
            }"
        >
            <div class="bg-black opacity-25">
                <img :src="bannerURL" alt="" class="opacity-0 w-3/5" />
            </div>
            <div
                class="bg-cover bg-fixed shadow-2xl shadow-gray-400 pb-10 h-1/2"
                :style="{
                    'background-image':
                        'url(../../img/home/OtakuWallpaper-gary.jpg)',
                }"
            >
                <div class="h-full">
                    <div
                        class="bg-cover bg-fixed flex items-center"
                        :style="{
                            'background-image':
                                'url(../../img/home/OtakuWallpaper.jpg)',
                        }"
                    >
                        <!-- <form
                        @submit.prevent="submit"
                        method="post"
                        enctype="multipart/form-data"
                        class="bg-cover bg-fixed h-28 flex items-center"
                        :style="{
                            'background-image':
                                'url(../../img/home/OtakuWallpaper.jpg)',
                        }"
                    > -->
                        <div class="relative left-14 -top-20">
                            <div class="relative z-10 top-56 left-44">
                                <!-- <input
                                    class="hidden"
                                    @input="
                                        form.avatar = $event.target.files[0]
                                    "
                                    type="file"
                                    id="imgUpload"
                                    accept=".png, .jpg, .jpeg"
                                />
                                <label
                                    class="
                                        bg-center
                                        bg-[length:50%]
                                        bg-no-repeat
                                        content-none
                                        flex
                                        items-center
                                        justify-center
                                        w-10
                                        h-10
                                        border-4 border-white
                                        rounded-full
                                        bg-gray-400
                                        hover:bg-gray-600 hover:cursor-pointer
                                    "
                                    for="imgUpload"
                                    :style="{
                                        'background-image':
                                            'url(../../img/icons/camera.png)',
                                    }"
                                ></label> -->
                                <!-- <AvatarUpload v-model="form.avatar" /> -->
                                <!-- <form
                                    @submit.prevent="submit"
                                    method="post"
                                    enctype="multipart/form-data"
                                    class="hidden"
                                > -->
                            </div>
                            <!-- <div
                                :style="{
                                    'background-image': `url(${avatarURL})`,
                                }"
                                class="bg-cover w-60 h-60 rounded-full bg-gray-800 border-8 border-white"
                            ></div> -->
                        </div>
                        <div class="mx-20 w-9/12 justify-start">
                            <div class="text-8xl py-5 text-quinary-dark">
                                {{ store[0].name }}
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="m-10">
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
            </div>
        </div>
    </Layout>
</template>

<script setup>
import CardItem from "../Shared/CardItem.vue";

import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

const bannerURL = ref(".././img/home/OtakunnectBanner.png");
const avatarURL = ref(".././img/login/-11601848172olq80epz0r.png");
defineProps({
    items: Array,
    store: Object,
});
</script>

<style></style>

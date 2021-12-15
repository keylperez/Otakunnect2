<template>
    <div class="px-5">
        <div class="py-10">
            <div
                class="
                    bg-primary-light
                    shadow-2xl shadow-gray-500
                    w-96
                    hover:scale-110 hover:cursor-pointer
                    duration-200
                    pb-1
                "
            >
                <div
                    class="
                        w-full
                        min-h-[383.394px]
                        max-h-[383.394px]
                        h-[383.394px]
                    "
                >
                    <img
                        class="
                            block
                            min-h-[383.394px]
                            max-h-[383.394px]
                            object-contain
                            object-[50%_50%]
                            mx-auto
                        "
                        :src="item.img"
                        alt=""
                    />
                </div>
                <div class="my-3 min-h-[177px]">
                    <div class="mx-3">
                        <div class="flex w-full items-center justify-between">
                            <div class="">
                                <svg
                                    class="
                                        fill-white
                                        stroke-black
                                        w-8
                                        h-8
                                        hover:cursor-pointer
                                        hover:scale-110
                                        hover:drop-shadow-xl
                                        duration-200
                                    "
                                >
                                    <!-- <symbol
                                        class="fill-white"
                                        id="icon-bookmark"
                                        viewBox="0 0 32 32"
                                    > -->
                                    <path d="M6 0v32l10-10 10 10v-32z"></path>
                                    <!-- </symbol> -->
                                </svg>
                            </div>
                            <div
                                class="
                                    bg-white
                                    rounded-full
                                    px-2
                                    py-1
                                    self-end
                                    w-min
                                "
                            >
                                <span>Featured</span>
                            </div>
                        </div>
                        <div class="mt-3 mb-1 h-14">
                            <h1 class="text-2xl">
                                {{ item.product_name }}
                            </h1>
                        </div>
                        <div class="ml-1 mb-3">
                            <div class="flex items-center justify-between my-5">
                                <span class="text-quinary-light">{{
                                    item.store_name
                                }}</span>
                                <h5 class="text-gray-500 text-2xl">
                                    ₱{{ item.price }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
export default {
    props: {
        item: Object,
    },
    setup(props) {},
    mounted() {
        console.log(item);
    },
};
</script>

<style></style>

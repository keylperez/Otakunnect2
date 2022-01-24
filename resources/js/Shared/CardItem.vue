<template>
    <div class="px-3">
        <div class="py-10">
            <Link
            >
                <div
                    class="
                        bg-primary-light
                        shadow-2xl shadow-gray-500
                        w-64
                        hover:scale-110 hover:cursor-pointer
                        duration-200
                        pb-1
                    "
                >
                    <div class="w-full min-h-64 max-h-64 h-64">
                        <img
                            class="
                                relative
                                min-h-64
                                max-h-64
                                mx-auto
                                my-auto
                                top-1/2
                                -translate-y-1/2
                            "
                            :src="item.img"
                            alt=""
                        />
                    </div>
                    <div class="my-3 min-h-40">
                        <div class="mx-3">
                            <div
                                class="flex w-full items-center justify-between"
                            >
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
                                        <path
                                            d="M6 0v32l10-10 10 10v-32z"
                                        ></path>
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
                                    <!-- <button v-if="$page.props.auth.user.auth_level">
                                    Edit
                                </button> -->
                                    <span>Featured</span>
                                </div>
                            </div>
                            <div class="mt-3 mb-1 h-14">
                                <h1 class="text-xl">
                                    {{ item.product_name }}
                                </h1>
                            </div>
                            <div class="ml-1 mb-3">
                                <div
                                    class="
                                        flex
                                        items-center
                                        justify-between
                                        my-5
                                    "
                                >
                                    <span class="text-quinary-light text-sm">{{
                                        item.store_name
                                    }}</span>
                                    <h5 class="text-gray-500 text-lg">
                                        ₱{{ item.price }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3";
defineProps({
    item: Object,
});

</script>


<style></style>

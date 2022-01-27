<template>
    <div class="py-8 flex flex-wrap md:flex-nowrap">
        <!-- <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-gray-700">{{
                item.name
            }}</span>
            <span class="mt-1 text-gray-500 text-sm">{{
                item.store_name
            }}</span>
        </div>
        <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                Bitters hashtag waistcoat fashion axe chia unicorn
            </h2>
            <p class="leading-relaxed">{{ item.desc }}</p>
            <Link
                :href="route('cart.del')"
                class="text-indigo-500 inline-flex items-center mt-4"
                >Delete
            </Link>
        </div> -->

        <div class="flow-root">
            <ul class="-my-4 divide-y divide-gray-100">
                <li class="flex items-center py-4">
                    <a href="" class="flex-shrink-0 block">
                        <img
                            :src="item.img"
                            alt=""
                            class="object-cover w-24 h-24 rounded-lg"
                        />
                    </a>

                    <div class="w-full ml-8">
                        <div class="sm:flex sm:justify-end">
                            <div>
                                <Link
                                    :href="
                                        route('product', {
                                            id: item.product_id,
                                        })
                                    "
                                    class="block font-medium"
                                >
                                    {{ item.name }}
                                </Link>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ item.store_name }} &middot; ₱{{
                                        item.price
                                    }}
                                </p>
                            </div>

                            <div
                                class="flex items-center flex-1 mt-4 sm:justify-end sm:mt-0"
                            >
                                <div class="flex space-x-1">
                                    <button
                                        type="button"
                                        class="flex-shrink-0 p-1 text-gray-500 border border-gray-200 rounded-full"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>

                                    <input
                                        type="number"
                                        v-model="total"
                                        min="0"
                                        class="w-12 p-1 text-center text-gray-500 border-none no-spinners"
                                    />

                                    <button
                                        type="button"
                                        class="flex-shrink-0 p-1 text-gray-500 border border-gray-200 rounded-full"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </div>

                                <Link
                                    :href="route('cart.del')"
                                    class="flex-shrink-0 p-2 ml-8 text-gray-600 bg-gray-100 rounded-full"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                        />
                                    </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
const props = defineProps({ item: Object });
</script>

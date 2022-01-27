<template>
    <div class="py-8 flex flex-wrap md:flex-nowrap">
        <li class="flex items-center py-4 flex-1">
            <Link
                :href="
                    route('product', {
                        id: item.product_id,
                    })
                "
                class="flex-shrink-0 block flex-1"
            >
                <img
                    :src="item.img"
                    alt=""
                    class="object-cover w-24 h-24 rounded-lg"
                />
            </Link>

            <div class="w-full ml-8 flex-1">
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
                            {{ item.store_name }} &middot; ₱{{ item.price }}
                        </p>
                    </div>

                    <div
                        class="flex items-center flex-1 mt-4 sm:justify-end sm:mt-0"
                    >
                        <div class="flex space-x-1">
                            <Link
                                :href="route('cart.update',{id:item.cart_id, count:item.item_count-1})"
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
                            </Link>

                            <input
                                type="number"
                                v-model="item.item_count"
                                min="0"
                                class="w-12 p-1 text-center text-gray-500 border-none no-spinners"
                            />

                            <Link
                                :href="route('cart.update',{id:item.cart_id, count:item.item_count+1})"
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
                            </Link>
                        </div>

                        <Link
                            :href="route('cart.del', { id: item.cart_id })"
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
    </div>
</template>

<script setup>
import { ref } from "vue";
const props = defineProps({ item: Object });
</script>

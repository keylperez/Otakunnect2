<template>
    <Head>
        <title>Cart</title>
    </Head>
    <Layout class="flex-1">
        <section class="text-gray-600 body-font overflow-hidden flex-1 my-10">
            <div class="bg-white container px-5 py-24 mx-auto">
                <div
                    v-if="cart.length != 0"
                    class="-my-8 divide-y-2 divide-gray-100"
                >
                    <div class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                        <h2 class="font-semibold text-2xl">
                            {{ cart.length }} Items
                        </h2>
                    </div>
                    <div class="flex">
                        <ul class="-my-4 divide-y divide-gray-100 flex-[2]">
                            <CartItem
                                v-for="item in cart"
                                :key="item.product_id"
                                :item="item"
                            />
                        </ul>
                        <div class="py-6 px-4 sm:px-6 flex-1">
                            <div class="border-l h-full">
                                <h1
                                    class="font-semibold text-2xl border-b pb-8 px-8"
                                >
                                    Order Summary
                                </h1>
                                <div
                                    id="summary"
                                    class="px-8 grid grid-col-1 h-full pb-10"
                                >
                                    <div>
                                        <div
                                            class="flex justify-between mt-10 mb-5"
                                        >
                                            <span
                                                class="font-semibold text-sm uppercase"
                                                >Items {{ cart.length }}</span
                                            >
                                            <span
                                                class="font-semibold text-sm"
                                                >{{ total }}</span
                                            >
                                        </div>
                                        <div class="">
                                            <label
                                                class="font-medium inline-block mb-3 text-sm uppercase"
                                                >Shipping</label
                                            >
                                            <select
                                                class="block p-2 text-gray-600 w-full text-sm"
                                            >
                                                <option>
                                                    Standard shipping - $10.00
                                                </option>
                                            </select>
                                        </div>
                                        <div class="py-10">
                                            <label
                                                for="promo"
                                                class="font-semibold inline-block mb-3 text-sm uppercase"
                                                >Promo Code</label
                                            >
                                            <input
                                                type="text"
                                                id="promo"
                                                placeholder="Enter your code"
                                                class="p-2 text-sm w-full"
                                            />
                                        </div>
                                        <button
                                            class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase"
                                        >
                                            Apply
                                        </button>
                                    </div>
                                    <div class="border-t mt-8 self-end">
                                        <div
                                            class="flex font-semibold justify-between py-6 text-sm uppercase"
                                        >
                                            <span>Total cost</span>
                                            <span>{{ total }}</span>
                                        </div>
                                        <button
                                            class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full"
                                        >
                                            Checkout
                                        </button>
                                    </div>
                                </div>
                                <!-- <Link href="/purchase" class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Checkout</Link> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    v-else
                    class="relative inset-0 flex items-center justify-center h-screen"
                >
                    <h1 class="text-5xl text-center flex-1">CART IS EMPTY</h1>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3";
import CartItem from "../Shared/CartItem.vue";
defineProps({
    cart: Array,
    total: Number,
});
</script>

<style></style>

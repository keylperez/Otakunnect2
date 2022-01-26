<template>
    <Head>
        <title>Cart</title>
    </Head>
    <Layout class="flex-1">
        <section class="text-gray-600 body-font overflow-hidden flex-1">
            <div class="container px-5 py-24 mx-auto">
                <div
                    v-if="cart.length > 0"
                    class="-my-8 divide-y-2 divide-gray-100"
                >
                    <CartItem
                        v-for="item in cart"
                        :key="item.product_id"
                        :item="item"
                    />
                </div>
                <div
                    v-else
                    class="relative inset-0 flex items-center justify-center h-screen"
                >
                    <h1 class="text-5xl text-center flex-1">
                        CART IS EMPTY :&#60
                    </h1>
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

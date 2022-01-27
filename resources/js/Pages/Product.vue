<template>
    <Head :title="item.name" />
    <Layout class="flex-1">
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
                <form
                    @submit.prevent="submit"
                    class="lg:w-4/5 mx-auto flex flex-wrap"
                >
                    <img
                        alt="ecommerce"
                        class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                        :src="item.img"
                    />
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2
                            class="text-sm title-font text-gray-500 tracking-widest"
                        >
                            {{ item.store_name }}
                        </h2>
                        <h1
                            class="text-gray-900 text-3xl title-font font-medium mb-1"
                        >
                            {{ item.name }}
                        </h1>
                        <p class="leading-relaxed">
                            {{ item.desc }}
                        </p>
                        <div
                            class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5"
                        >
                            <div class="flex ml-6 items-center">
                                <span class="mr-3">Quantity</span>
                                <div class="relative">
                                    <input
                                        type="number"
                                        name="count"
                                        v-model="form.item_count"
                                        min="1"
                                        class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3"
                                    />
                                    <!-- <input type="number" name="product_id" v-model="form.product_id">
                                    <input type="number" name="user_id" v-model="form.user_id"> -->
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <span
                                class="title-font font-medium text-2xl text-gray-900"
                                >₱{{ item.price * form.item_count }}</span
                            >
                            <!-- <Link
                                href="/cart"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            > -->
                            <!-- <Link
                                :href="
                                    route('cart.add', { item: item.product_id, _query: {total: total} })
                                "
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            > -->
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            >
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import { usePage, useForm } from "@inertiajs/inertia-vue3";
import { computed, ref } from "vue";
const props = defineProps({
    items: Array,
    error: Object,
});
const item = ref(props.items[0]);
const form = useForm({ item_count: 0 });
const submit = () => {
    if (usePage().props.value.auth) {
        form.transform((data) => ({
            ...data,
            product_id: props.items[0].product_id,
            user_id: usePage().props.value.auth.user.id,
        })).post("/cart/add");
    } else {
        form.post(route("cart"));
    }
};
let quantity = ref(0);
</script>

<style></style>

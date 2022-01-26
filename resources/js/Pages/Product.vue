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
                                >₱{{ item.price * form.total }}</span
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
                            <!-- </Link> -->
                            <!-- <button
                                class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4"
                            >
                                <svg
                                    fill="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                                    ></path>
                                </svg>
                            </button> -->
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
    form.transform((data) => ({
        ...data,
        product_id: props.items[0].product_id,
        user_id: usePage().props.value.auth.user.id,
    })).post("/cart/add");
    // form.post(
    //     route("cart.add", { item: item.product_id, quantity: form.total })
    // );
};
let quantity = ref(0);
</script>

<style></style>

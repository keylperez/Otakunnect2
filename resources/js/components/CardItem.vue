<template>
    <div class="px-5">
        <div class="py-10">
            <div
                class="
                    bg-primary-light
                    shadow-2xl shadow-gray-500
                    h-96
                    w-72
                    hover:scale-110
                    duration-200
                "
            >
                <div class="w=full">
                    <img
                        class="w-full max-w-full max-h-full"
                        :src="item.img"
                        alt=""
                    />
                </div>
                <div class="my-3">
                    <div class="mx-3">
                        <div>
                            <h3 class="text-4xl">{{ item.name }}</h3>
                        </div>
                        <div class="ml-1">
                            <h5 class="text-gray-400">₱{{ item.price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: Object,
    },
    mounted() {
        console.log(item);
    },
};
</script>

<style></style>

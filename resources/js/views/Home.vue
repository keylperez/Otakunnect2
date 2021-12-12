<template>
    <div class="w-full">
        <div>
            <img src="https://i.imgur.com/yDShAdn.png" alt="" />
        </div>
        <div
            class="bg-contain bg-fixed"
            :style="{
                'background-image': 'url(https://i.imgur.com/6ZVkxJ9.jpg)',
            }"
        >
            <div class="mx-5">
                <div class="">
                    <CardItem
                        :item="{
                            name: 'Dog',
                            price: 2,
                            img: 'https://i.imgur.com/PJWlask.jpg',
                        }"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CardItem from "../components/CardItem.vue";
export default {
    components: {
        CardItem,
    },
};
</script>

<style></style>

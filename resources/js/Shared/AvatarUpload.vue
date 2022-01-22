<template>
    <input
        class="hidden"
        type="file"
        accept=".png, .jpg, .jpeg"
        @change="change"
        ref="file"
    />
    <button
        class="
            bg-center
            bg-[length:50%]
            bg-no-repeat
            content-none
            flex
            items-center
            justify-center
            w-10
            h-10
            border-4 border-white
            rounded-full
            bg-gray-400
            hover:bg-gray-400 hover:cursor-pointer
        "
        @click="browse"
        :style="{
            'background-image': 'url(../../img/icons/camera.png)',
        }"
    ></button>
</template>

<script>
export default {
    props: {
        value: File,
    },
    methods: {
        browse() {
            this.$refs.file.click();
        },
        change(e) {
            this.$emit("update:modelValue", e.target.files[0]);
        },
    },
};
// import { ref, defineExpose } from "vue";

// defineProps({ value: File });

// const file = ref(null);

// const browse = () => {
//     this.defineExpose({ file }).click();
// };
// const change = (e) => {
//     this.$emit("update:modelValue", e.target.files[0]);
// };
</script>

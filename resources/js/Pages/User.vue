<template>
    <Head>
        <title>User</title>
    </Head>
    <Layout>
        <div
            class="bg-fixed bg-contain relative"
            :style="{
                'background-image': `url(${bannerURL})`,
            }"
        >
            <div class="bg-black opacity-25">
                <img :src="bannerURL" alt="" class="opacity-0 w-3/5" />
            </div>
            <div
                class="bg-cover bg-fixed shadow-2xl shadow-gray-400 pb-10 h-1/2"
                :style="{
                    'background-image':
                        'url(../../img/home/OtakuWallpaper-gary.jpg)',
                }"
            >
                <div class="h-full">
                    <form
                        @submit.prevent="submit"
                        method="post"
                        enctype="multipart/form-data"
                        class="bg-cover bg-fixed h-28 flex items-center"
                        :style="{
                            'background-image':
                                'url(../../img/home/OtakuWallpaper.jpg)',
                        }"
                    >
                        <div class="relative left-14 -top-20">
                            <div class="relative z-10 top-56 left-44">
                                <!-- <input
                                    class="hidden"
                                    @input="
                                        form.avatar = $event.target.files[0]
                                    "
                                    type="file"
                                    id="imgUpload"
                                    accept=".png, .jpg, .jpeg"
                                />
                                <label
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
                                        hover:bg-gray-600 hover:cursor-pointer
                                    "
                                    for="imgUpload"
                                    :style="{
                                        'background-image':
                                            'url(../../img/icons/camera.png)',
                                    }"
                                ></label> -->
                                <!-- <AvatarUpload v-model="form.avatar" /> -->
                                <!-- <form
                                    @submit.prevent="submit"
                                    method="post"
                                    enctype="multipart/form-data"
                                    class="hidden"
                                > -->
                                <input
                                    v-on:change="fileChoosen"
                                    @input="
                                        form.avatar = $event.target.files[0]
                                    "
                                    type="file"
                                    class="hidden"
                                    name="avatar"
                                />
                                <button
                                    type="submit"
                                    class="bg-center bg-[length:50%] bg-no-repeat content-none flex items-center justify-center w-10 h-10 border-4 border-white rounded-full bg-gray-400 hover:bg-gray-400 hover:cursor-pointer"
                                    :style="{
                                        'background-image':
                                            'url(../../img/icons/camera.png)',
                                    }"
                                ></button>
                                <!-- </form> -->
                            </div>
                            <div
                                :style="{
                                    'background-image': `url(${$page.props.auth.user.image})`,
                                }"
                                class="bg-cover w-60 h-60 rounded-full bg-gray-800 border-8 border-white"
                            />
                        </div>
                        <div
                            class="grid grid-cols-4 mx-20 w-9/12 justify-start"
                        >
                            <div class="text-3xl">
                                Name:
                                <span class="text-xl text-quinary-dark">
                                    {{ $page.props.auth.user.name }}
                                </span>
                            </div>
                            <div class="text-3xl">
                                Username:
                                <span class="text-xl text-quinary-dark">
                                    {{ $page.props.auth.user.username }}
                                </span>
                            </div>
                            <div class="text-3xl">
                                Email:
                                <span class="text-xl text-quinary-dark">
                                    {{ $page.props.auth.user.email }}
                                </span>
                            </div>
                            <div class="text-3xl">
                                Phone:

                                <Link
                                    class="text-xl text-quinary-dark hover:underline hover:decoration-quinary-light"
                                >
                                    {{
                                        $page.props.auth.user.phone
                                            ? $page.props.auth.user.phone
                                            : "add phone number"
                                    }}
                                </Link>
                            </div>
                        </div>
                        <!-- <button class="float-right">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-6 h-6 text-quinary scale-[3.0]"
                                viewBox="0 0 40 40"
                            >
                                <path
                                    d="M12 21h9c0.552 0 1-0.448 1-1s-0.448-1-1-1h-9c-0.552 0-1 0.448-1 1s0.448 1 1 1zM15.793 2.793l-12.5 12.5c-0.122 0.121-0.217 0.28-0.263 0.465l-1 4c-0.039 0.15-0.042 0.318 0 0.485 0.134 0.536 0.677 0.862 1.213 0.728l4-1c0.167-0.041 0.33-0.129 0.465-0.263l12.5-12.5c0.609-0.609 0.914-1.41 0.914-2.207s-0.305-1.598-0.914-2.207-1.411-0.915-2.208-0.915-1.598 0.305-2.207 0.914zM17.207 4.207c0.219-0.219 0.504-0.328 0.793-0.328s0.574 0.109 0.793 0.328 0.328 0.504 0.328 0.793-0.109 0.574-0.328 0.793l-12.304 12.304-2.115 0.529 0.529-2.115z"
                                ></path>
                            </svg>
                        </button> -->
                    </form>
                    <div>
                        <div class="m-5 mt-10">
                            <h1 class="text-5xl">Purchases:</h1>
                        </div>
                        <div class="m-10">
                            <Purchase
                                v-for="item in items"
                                :key="item.purchase_id"
                                :item="item"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import Purchase from "../Shared/Purchase.vue";

const bannerURL = ref(".././img/home/OtakunnectBanner.png");
const avatarURL = ref(".././img/login/-11601848172olq80epz0r.png");
const filename = ref("");

defineProps({ items: Array });

const form = useForm({
    avatar: null,
});

function setNull() {
    form.avatar = null;
}
const fileChoosen = (event) => {
    filename.value = event.target.files[0].name;
};
const submit = () => {
    form.post("/user/upload");
    filename.value = "";
    // console.log("submitting", form);
    setNull();
};
</script>

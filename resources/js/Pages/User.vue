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
                        class="bg-cover bg-fixed h-28 flex items-center"
                        :style="{
                            'background-image':
                                'url(../../img/home/OtakuWallpaper.jpg)',
                        }"
                    >
                        <div class="relative left-14 -top-20">
                            <div class="relative z-10 top-56 left-44">
                                <input
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
                                ></label>
                            </div>
                            <div
                                :style="{
                                    'background-image': `url(${avatarURL})`,
                                }"
                                class="
                                    bg-cover
                                    w-60
                                    h-60
                                    rounded-full
                                    bg-gray-800
                                    border-8 border-white
                                "
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
                                    class="
                                        text-xl text-quinary-dark
                                        hover:underline
                                        hover:decoration-quinary-light
                                    "
                                >
                                    {{
                                        $page.props.auth.user.phone
                                            ? $page.props.auth.user.phone
                                            : "add phone number"
                                    }}
                                </Link>
                            </div>
                        </div>
                        <button class="float-right">
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
                        </button>
                    </form>
                    <div>
                        <div class="m-10">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Esse totam laudantium, ab qui iste harum
                            fugiat deserunt natus, recusandae molestiae
                            voluptates non inventore tempora fuga debitis quidem
                            voluptatum voluptate minus maxime ducimus!
                            Voluptates tempora nihil quaerat, optio assumenda
                            expedita? Adipisci, ipsa soluta reiciendis eum
                            beatae delectus maxime numquam ullam illo a incidunt
                            voluptates distinctio sint animi, tenetur dolorem
                            quo debitis aut expedita provident nihil architecto
                            repudiandae. Laudantium, nobis? Perferendis ut,
                            tempora expedita sapiente natus sint saepe accusamus
                            repellendus repudiandae recusandae veritatis quis?
                            Tenetur voluptate quo illum, illo alias rem, aperiam
                            numquam magni et pariatur maiores, non dolorem.
                            Dolor veniam dolores quod vero aliquid earum dicta
                            impedit odio dolore voluptatibus, esse numquam
                            pariatur natus totam aut sapiente rem non inventore
                            est ipsam obcaecati. Commodi id odit aliquid
                            laboriosam alias iste provident, dolores ducimus
                            soluta, a praesentium debitis, magni expedita rem
                            tenetur? Harum dolorem quia illum architecto dolore
                            eos aperiam tenetur sapiente repudiandae recusandae,
                            nisi nesciunt reiciendis obcaecati est delectus
                            facere incidunt dolores tempora vero perspiciatis a.
                            Aliquid non ducimus voluptatibus eum omnis ullam,
                            velit fugiat error vel, accusamus quod pariatur
                            aliquam veritatis consequuntur alias! Neque aliquam
                            reiciendis unde dolorem accusamus provident saepe,
                            iste ratione, doloremque dolores repudiandae
                            suscipit inventore nihil nisi placeat non temporibus
                            quasi labore voluptates porro accusantium illo?
                            Ipsum cupiditate quia libero assumenda! Odit
                            inventore, blanditiis reiciendis nam porro voluptate
                            repellendus architecto hic numquam neque sequi saepe
                            minima in natus magnam similique ad suscipit unde
                            ipsam assumenda excepturi fuga, mollitia ut. Unde
                            delectus numquam rem sit quam cumque ipsum, labore
                            nihil cum, iusto obcaecati ex repellendus sunt culpa
                            nisi. Quis ullam maiores, minus expedita mollitia
                            totam molestiae, dolores perferendis vero quaerat
                            consectetur quibusdam ut eaque odit quae beatae
                            magnam? Dolorum vero amet saepe architecto adipisci
                            sit natus eius? Ut eos earum deserunt. Reiciendis
                            quidem maiores quisquam incidunt quia reprehenderit
                            qui iusto et enim, accusantium totam ducimus,
                            placeat deserunt id. Tenetur consectetur neque quae,
                            sit odio voluptate similique corporis numquam.
                            Tempora et accusantium voluptatibus non cupiditate
                            saepe est porro doloribus excepturi. Exercitationem
                            error maxime quam suscipit similique? Minus laborum
                            architecto facere tempore reiciendis exercitationem
                            fugit cumque, excepturi accusantium dolorem.
                            Voluptas est, aliquam maiores reiciendis doloremque
                            nobis quasi sint modi, soluta inventore beatae ut
                            voluptates facilis aperiam accusamus, blanditiis
                            consequatur vero ex sapiente harum. Natus error
                            quia, soluta alias eum saepe, cumque adipisci libero
                            minima, id officia rerum! Reprehenderit accusantium
                            assumenda asperiores ipsam animi, quis eveniet minus
                            nemo, quod ad itaque soluta! Nisi consequuntur quod
                            praesentium, est facilis nihil ea deleniti labore,
                            explicabo alias laboriosam asperiores dolorem
                            recusandae! Obcaecati distinctio ea quaerat
                            blanditiis ex commodi quas dolores voluptas nemo
                            exercitationem harum voluptates dolore, possimus
                            illum impedit labore voluptatum itaque quia
                            laboriosam atque animi culpa tempora. Ipsam ullam
                            adipisci, modi rerum laboriosam obcaecati tempora
                            perspiciatis aut tenetur saepe officiis, praesentium
                            dolore optio voluptatum doloremque quae totam
                            explicabo aliquid aliquam officia nobis sit
                            doloribus vel ea. Et fugit repellendus dignissimos
                            rerum corporis quos assumenda itaque reiciendis
                            perspiciatis! Neque vero exercitationem hic
                            deserunt. Sequi possimus asperiores quas fugiat quis
                            illum, velit consectetur animi labore?
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

const bannerURL = ref(".././img/home/OtakunnectBanner.png");
const avatarURL = ref(".././img/login/-11601848172olq80epz0r.png");

const form = useForm({
    avatar: null,
});
const submit = () => {
    form.post("/img");
};
</script>

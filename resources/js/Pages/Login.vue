<template>
    <Head>
        <title>Login</title>
    </Head>
    <Layout>
        <div class="flex grow relative h-full min-h-full">
            <div class="flex">
                <div
                    class="
                        bg-white
                        w-1/4
                        p-10
                        h-full
                        min-h-full
                        text-primary-dark
                        animate-drawer-left
                        flex-1
                        shadow-xl
                    "
                >
                    <h2 class="font-bold text-5xl">Sign in to your account</h2>
                    <form @submit.prevent="submit" class="flex flex-col my-10">
                        <div>
                            <label
                                for="email"
                                class="block font-medium text-2xl mt-1"
                                >Email Address</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="email"
                                v-model="form.email"
                                autofocus
                                class="
                                    shadow-md
                                    w-full
                                    border-2
                                    rounded-md
                                    h-10
                                    mb-2
                                    text-gray-900
                                    p-1
                                "
                            />
                            <div class="h-10">
                                <p
                                    v-if="form.errors.email"
                                    v-text="form.errors.email"
                                    class="text-red-400 text-sm"
                                ></p>
                            </div>
                        </div>
                        <div>
                            <label
                                for="password"
                                class="block font-medium text-2xl mt-1"
                                >Password</label
                            >
                            <input
                                type="password"
                                id="password"
                                name="password"
                                v-model="form.password"
                                autofocus
                                class="
                                    shadow-md
                                    w-full
                                    border-2
                                    rounded-md
                                    h-10
                                    mb-2
                                    text-gray-900
                                    p-1
                                "
                            />
                            <div class="h-4">
                                <p
                                    v-if="form.errors.password"
                                    v-text="form.errors.password"
                                    class="text-red-400 text-sm"
                                ></p>
                            </div>
                        </div>
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="
                                bg-primary
                                text-white
                                my-5
                                h-12
                                rounded-lg
                                hover:bg-primary-light hover:text-gray-900
                                duration-300
                            "
                        >
                            Sign in
                        </button>
                    </form>
                </div>
                <div class="flex-[4]">
                    <div class="mx-20">
                        <div class="my-10">
                            <p class="font-semibold text-2xl text-gray-800">
                                We are anime fans who do our best to bring each
                                other a lot closer. Using our website, you can
                                set up sale for all of your weeaboo goods with
                                ease for any upcoming conventions. At the same
                                time, you can purchase items in advance before
                                the conventions begins; so, you can just simply
                                pick up the goods once you reach the shop in the
                                convention.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post("/login");
};
</script>

<template>
    <Head>
        <title>Login</title>
    </Head>
    <Layout>
        <div class="flex h-max">
            <div class="flex">
                <div
                    class="
                        bg-white
                        w-1/4
                        h-[75rem]
                        p-10
                        h-maxam
                        text-primary-dark
                        animate-drawer-left
                        flex-1
                        shadow-xl
                    "
                >
                    <h2 class="font-bold text-5xl">Sign in to your account</h2>
                    <form @submit.prevent="submit" class="flex flex-col my-10">
                        <label for="email" class="font-medium text-2xl mt-5"
                            >Email Address</label
                        >
                        <input
                            type="email"
                            id="email"
                            name="email"
                            v-model="form.email"
                            autofocus
                            required
                            class="
                                shadow-md
                                border-2
                                rounded-md
                                h-10
                                mb-2
                                text-gray-900
                                p-1
                            "
                        />
                        <label for="password" class="font-medium text-2xl mt-5"
                            >Password</label
                        >
                        <input
                            type="password"
                            id="password"
                            name="password"
                            v-model="form.password"
                            autofocus
                            required
                            class="
                                shadow-md
                                border-2
                                rounded-md
                                h-10
                                mb-2
                                text-gray-900
                                p-1
                            "
                        />
                        <button
                            type="submit"
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
    <!-- <pre>

    {{ form }}
    </pre> -->
</template>

<script>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
export default {
    setup: () => {
        const form = reactive({
            email: "",
            password: "",
        });
        const submit = () => {
            Inertia.post("/login", form);
        };
        return { form, submit };
    },
    mounted() {
        console.log(this.form);
    },
};
</script>

<style scoped>
html,
body {
    overflow: hidden;
}
</style>

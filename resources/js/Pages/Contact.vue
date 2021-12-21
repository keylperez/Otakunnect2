<template>
    <Head>
        <title>Contact</title>
    </Head>
    <Layout class="flex-1">
        <div class="flex bg-primary p-10 justify-center items-center">
            <form
                @submit.prevent="submit"
                class="justify-center items-center from-quinary"
            >
                <div class="flex flex-wrap -mx-3">
                    <div class="px-3 mb-6 md:mb-0">
                        <label
                            class="
                                block
                                uppercase
                                tracking-wide
                                text-gray-700 text-xs
                                font-bold
                                mb-2
                                w-full
                            "
                            for="name"
                        >
                            Full Name
                        </label>
                        <input
                            class="
                                appearance-none
                                block
                                w-full
                                bg-gray-200
                                text-gray-700
                                border border-gray-200
                                rounded
                                py-3
                                px-4
                                leading-tight
                                focus:outline-none
                                focus:bg-white
                                focus:border-gray-500
                                duration-100
                            "
                            id="name"
                            name="name"
                            v-model="form.name"
                            type="text"
                            placeholder="Jane"
                        />
                        <div class="h-10">
                            <p
                                v-if="form.errors.name"
                                v-text="form.errors.name"
                                class="text-red-400 text-sm"
                            ></p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="px-3">
                        <label
                            class="
                                block
                                uppercase
                                tracking-wide
                                text-gray-700 text-xs
                                font-bold
                                mb-2
                                w-full
                            "
                            for="email"
                        >
                            E-mail
                        </label>
                        <input
                            class="
                                appearance-none
                                block
                                w-full
                                bg-gray-200
                                text-gray-700
                                border border-gray-200
                                rounded
                                py-3
                                px-4
                                mb-3
                                leading-tight
                                focus:outline-none
                                focus:bg-white
                                focus:border-gray-500
                                duration-100
                            "
                            id="email"
                            type="email"
                            name="email"
                            v-model="form.email"
                        />
                        <div class="h-10">
                            <p
                                v-if="form.errors.email"
                                v-text="form.errors.email"
                                class="text-red-400 text-sm"
                            ></p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="px-3">
                        <label
                            class="
                                block
                                uppercase
                                tracking-wide
                                text-gray-700 text-xs
                                font-bold
                                mb-2
                                w-full
                            "
                            for="subject"
                        >
                            Subject
                        </label>
                        <input
                            class="
                                appearance-none
                                block
                                w-full
                                bg-gray-200
                                text-gray-700
                                border border-gray-200
                                rounded
                                py-3
                                px-4
                                mb-3
                                leading-tight
                                focus:outline-none
                                focus:bg-white
                                focus:border-gray-500
                                duration-100
                            "
                            id="subject"
                            type="subject"
                            name="subject"
                            autofocus
                            v-model="form.subject"
                        />
                        <div class="h-10">
                            <p
                                v-if="form.errors.subject"
                                v-text="form.errors.subject"
                                class="text-red-400 text-sm"
                            ></p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="px-3">
                        <label
                            class="
                                block
                                w-full
                                uppercase
                                tracking-wide
                                text-gray-700 text-xs
                                font-bold
                                mb-2
                                duration-100
                            "
                            for="message"
                        >
                            Message
                        </label>
                        <textarea
                            class="
                                no-resize
                                appearance-none
                                block
                                w-full
                                bg-gray-200
                                text-gray-700
                                border border-gray-200
                                rounded
                                py-3
                                px-4
                                mb-3
                                leading-tight
                                focus:outline-none
                                focus:bg-white
                                focus:border-gray-500
                                h-48
                                resize-none
                                duration-100
                            "
                            id="message"
                            name="message"
                            v-model="form.message"
                        ></textarea>
                        <div class="h-10">
                            <p
                                v-if="form.errors.message"
                                v-text="form.errors.message"
                                class="text-red-400 text-sm"
                            ></p>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button
                            class="
                                shadow
                                bg-quinary
                                hover:bg-quinary-light
                                focus:shadow-outline focus:outline-none
                                text-white
                                font-bold
                                py-2
                                px-4
                                rounded
                                duration-100
                            "
                            type="submit"
                            :disabled="form.processing"
                        >
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </Layout>
</template>

<script setup>
import { useForm, usePage } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: `${usePage().props.value.auth.user.name}`,
    email: `${usePage().props.value.auth.user.email}`,
    subject: "",
    message: "",
    user_id: usePage().props.value.auth.user.id,
});

const submit = () => {
    form.post("/contact");
};
</script>

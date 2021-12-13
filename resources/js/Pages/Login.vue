<template>
    <layout>
        <div class="flex h-max">
            <div class="flex">
                <div
                    class="
                        bg-white
                        w-1/4
                        p-10
                        h-maxam
                        text-primary-dark
                        animate-drawer-left
                        flex-1
                        shadow-xl
                    "
                >
                    <h2 class="font-bold text-5xl">Sign in to your account</h2>
                    <form class="flex flex-col my-10">
                        <label for="email" class="font-medium text-2xl mt-5"
                            >Email Address</label
                        >
                        <input
                            type="email"
                            id="email"
                            name="email"
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
                    <div>
                        <p>
                            We are anime fans who do our best to bring each
                            other a lot closer. Using our website, you can set
                            up sale for all of your weeaboo goods with ease for
                            any upcoming conventions. At the same time, you can
                            purchase items in advance before the conventions
                            begins; so, you can just simply pick up the goods
                            once you reach the shop in the convention.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
export default {};
</script>

<style></style>

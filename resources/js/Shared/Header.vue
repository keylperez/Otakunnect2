<template>
    <div class="relative bg-white">
        <div class="max-w-full mx-auto px-4 sm:px-6">
            <div
                class="
                    flex
                    justify-between
                    items-center
                    border-b-2 border-gray-100
                    py-6
                    md:justify-start md:space-x-10
                "
            >
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <div>
                        <h1 class="text-6xl text-primary drop-shadow-xl">
                            Otakunnect
                        </h1>
                    </div>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button
                        type="button"
                        class="
                            rounded-md
                            p-2
                            inline-flex
                            items-center
                            justify-center
                            text-gray-400
                            hover:text-gray-500 hover:bg-gray-100
                            focus:outline-none
                            focus:ring-2
                            focus:ring-inset
                            focus:ring-primary-light
                        "
                        aria-expanded="false"
                    ></button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <div class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <Link
                            href="/"
                            class="
                                text-gray-500
                                group
                                rounded-md
                                inline-flex
                                items-center
                                text-base
                                font-medium
                                hover:text-gray-900
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-primary-light
                            "
                            exact
                            aria-expanded="false"
                        >
                            Home
                        </Link>

                        <!--
            'Solutions' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
                    </div>
                    <div class="relative">
                        <Link
                            href="/store"
                            class="
                                text-gray-500
                                group
                                rounded-md
                                inline-flex
                                items-center
                                text-base
                                font-medium
                                hover:text-gray-900
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-primary-light
                            "
                        >
                            Stores
                        </Link>
                    </div>
                    <div class="relative">
                        <Link
                            href="/category"
                            class="
                                text-gray-500
                                group
                                rounded-md
                                inline-flex
                                items-center
                                text-base
                                font-medium
                                hover:text-gray-900
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-primary-light
                            "
                        >
                            Category
                        </Link>
                    </div>

                    <div class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <Link
                            href="/contact"
                            class="
                                text-gray-500
                                group
                                rounded-md
                                inline-flex
                                items-center
                                text-base
                                font-medium
                                hover:text-gray-900
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-primary-light
                            "
                            aria-expanded="false"
                        >
                            Contact
                        </Link>

                        <!--
            'More' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
                    </div>
                </nav>
                <div
                    class="
                        hidden
                        md:flex
                        items-center
                        justify-end
                        md:flex-1
                        lg:w-0
                    "
                >
                    <Link
                        href="/login"
                        class="
                            whitespace-nowrap
                            text-base
                            font-medium
                            text-gray-800
                            hover:text-gray-900
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-primary-light
                            duration-300
                        "
                    >
                        Sign in
                    </Link>
                    <Link
                        href="/signup"
                        class="
                            ml-8
                            whitespace-nowrap
                            inline-flex
                            items-center
                            justify-center
                            px-4
                            py-2
                            border border-transparent
                            rounded-md
                            shadow-sm
                            text-base
                            font-medium
                            text-white
                            bg-primary
                            hover:bg-primary-light hover:text-gray-900
                            duration-300
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-primary-light
                        "
                    >
                        Sign up
                    </Link>
                </div>
                <!-- <div
                    class="
                        hidden
                        md:flex
                        items-center
                        justify-end
                        md:flex-1
                        lg:w-0
                    "
                >
                    <Link
                        href="/logout"
                        method="post"
                        as="button"
                        class="
                            ml-8
                            whitespace-nowrap
                            inline-flex
                            items-center
                            justify-center
                            px-4
                            py-2
                            border border-transparent
                            rounded-md
                            shadow-sm
                            text-base
                            font-medium
                            text-white
                            bg-primary
                            hover:bg-primary-light hover:text-gray-900
                            duration-300
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-primary-light
                        "
                        >Signout</Link
                    >
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
};
</script>

<style></style>

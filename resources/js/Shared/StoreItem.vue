<template>
    <div class="mx-5 ml-32">
        <div class="my-5">
            <Link
            href="/store"
            :data="{ item: item.store_id }"
            :item="{item}"
            >
                <div
                    class="
                        rounded-3xl
                        bg-white
                        w-2/3
                        shadow-xl
                        border-primary border-4
                        hover:border-secondary-light hover:bg-primary-light
                        duration-200
                        hover:scale-[1.01]
                    "
                >
                    <div class="flex">
                        <div class="h-32 w-32 mr-5">
                            <img src="" class="object-contain" alt="Store pic" />
                        </div>
                        <div class="flex flex-col my-3 text-4xl">
                            <div>
                                <h1>{{ item.name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</template>

<script setup>
defineProps({ item: Object });
</script>

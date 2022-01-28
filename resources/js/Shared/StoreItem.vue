<template>
    <div class="mx-5 ml-32">
        <div class="my-5">
            <Link :href="route('store', { id: item.store_id })">
                <div
                    class="rounded-3xl bg-white shadow-xl border-primary border-4 hover:border-secondary-light hover:bg-primary-light duration-200 hover:scale-[1.01]"
                >
                    <div class="flex">
                        <!-- <div class="h-32 w-32 mr-5">
                            <img src="" class="object-contain" alt="Store pic" />
                        </div> -->
                        <div class="flex flex-col my-3 text-4xl p-5">
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

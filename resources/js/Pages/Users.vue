<template>
    <Head>
        <title>User</title>
    </Head>
    <Layout>
        <div class="mx-20 my-10">
            <table class="table-auto w-full bg-white rounded-2xl">
                <thead
                    class="
                        text-xs
                        font-semibold
                        uppercase
                        text-gray-400
                        bg-gray-50
                    "
                >
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Name</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Username</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Email</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Type</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Store</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr v-for="user in users" :key="user.user_id">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">
                                    {{ user.name }}
                                </div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ user.username }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium">
                                {{ user.email }}
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">
                                {{ user.auth_level }}
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">
                                {{ user.store_id ? "None" : user.store_id }}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>

<script setup>
defineProps({ users: Array });
</script>

<style></style>

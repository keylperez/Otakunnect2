<template>
    <Head>
        <title>User</title>
    </Head>
    <Layout>
        <pre>{{ users }}</pre>
    </Layout>
</template>

<script setup>
defineProps({ users: Array });
</script>

<style></style>

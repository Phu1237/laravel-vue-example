<template>
    <TheHeader />
    <router-view />
    <TheFooter />
</template>

<script>
import TheHeader from "./Components/TheHeader.vue";
import TheFooter from "./Components/TheFooter.vue";

export default {
    components: {
        TheHeader,
        TheFooter,
    },
};
</script>

<style></style>

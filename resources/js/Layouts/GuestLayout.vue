<template>
    <div class="layout-conteiner">
        <Header/>
        <main class="main-conteiner">
            <slot></slot>
        </main>
    </div>
</template>

<script setup>

import Header from '@/Components/Header/Header.vue';

</script>

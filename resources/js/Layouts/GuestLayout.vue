<template>
    <div class="layout-conteiner">
        <Header/>
        <Inicio/>
        <Servicios/>
        <main class="main-conteiner">
            <slot></slot>
        </main>
        <Footer/>
    </div>
</template>

<script setup>

import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/Footer.vue';
import Inicio from '@/Components/Inicio/Inicio.vue';
import Servicios from '@/Components/Servicios/Servicios.vue';

</script>
<style scoped>
.layout-conteiner {
    max-width: 1250px;
    margin: auto;
}
</style>

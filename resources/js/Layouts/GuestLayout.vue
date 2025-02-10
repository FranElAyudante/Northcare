<template>
    <div class="layout-conteiner">
        <Header/>
        <Inicio/>
        <Servicios/>
        <Clientes/>
        <Tarifas/>
        <EspecialistasGarantia/>
        <Nosotros/>
        <Contacto/>
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
import Clientes from '@/Components/Clientes/Clientes.vue';
import Tarifas from '@/Components/Tarifas/Tarifas.vue';
import EspecialistasGarantia from '@/Components/Garantia/EspecialistasGarantia.vue';
import Nosotros from '@/Components/Nosotros/Nosotros.vue';
import Contacto from '@/Components/Contacto/Contacto.vue';

</script>
<style scoped>
.layout-conteiner {
    max-width: 1250px;
    margin: auto;
}
</style>

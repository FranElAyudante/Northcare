<template>
    <div>
        <!-- Mostrar solo en escritorio -->
        <div v-if="!isMobile">
            <div>
                <img class="camino-descuento" src="Images/caminoDescuento.svg" />
            </div>
            <v-row class="descuento-contenedor">
                <!-- Sección de Descuento -->
                <v-col cols="12" class="discount-section">
                    <!-- Overlay Oscuro -->
                    <div class="overlay"></div>

                    <!-- Textos -->
                    <div class="discount-text-left">
                        <p>Repara, previene, y sigue funcionando pero con un...</p>
                    </div>

                    <div class="discount-text">
                        <v-img src="/images/descuento50.svg" alt="Descuento 50%" class="descuento-image"></v-img>
                        <p>de descuento en los primeros</p>
                        <v-img src="/images/meses.svg" alt="Meses de descuento" class="mes-image"></v-img>
                        <p>en locales de nueva apertura</p>
                    </div>

                    <div class="discount-text-right">
                        <p>¡Aprovecha! Tu negocio nunca se detiene!</p>
                    </div>
                </v-col>
            </v-row>
        </div>

        <!-- Mostrar solo en móviles -->
        <div v-if="isMobile" class="mobile-offer">
            <img src="/images/OfertaMovil.svg" alt="Oferta especial" class="mobile-offer-image" />
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";

const isMobile = ref(window.innerWidth < 768);

const updateScreenSize = () => {
    isMobile.value = window.innerWidth < 768;
};

onMounted(() => {
    window.addEventListener("resize", updateScreenSize);
});

onUnmounted(() => {
    window.removeEventListener("resize", updateScreenSize);
});
</script>

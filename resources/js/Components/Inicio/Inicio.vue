<template>
    <div class="home-section">
        <v-row class="hero-section">

            <!-- Contenido Desktop -->
            <div v-if="!isMobile" class="home-images">
                <div class="furgo-text">
                    <!-- Furgoneta -->
                    <div class="image-furgo">
                        <div class="path-wrapper">
                            <img :src="furgoImage" alt="Furgoneta" class="van-image" />
                        </div>
                    </div>

                    <div class="text-service-desktop">
                        <h1 class="title-home">CUANDO ALGO FALLA, NOSOTROS RESPONDEMOS</h1>
                        <p class="subtitle-home">
                            Especialistas en <strong>mantenimiento</strong> y <strong>urgencias</strong>
                            para empresas del sector de la hostelería y la restauración.
                        </p>
                        <div class="btn-solicitud">
                            <NavLink href="#contacto" variant="outlined" rounded="xl" class="btn-public">
                                Solicitar Presupuesto
                            </NavLink>
                        </div>
                    </div>
                </div>

                <!-- Mapa -->
                <div cols="12" class="map-container max-width">
                    <div class="map-wrapper">
                        <img :src="mapaImage" alt="Mapa" class="map-image" />
                        <div class="map-overlay"></div>
                    </div>
                </div>
            </div>

            <!-- Contenido Móvil -->
            <div v-if="isMobile" class="mobile-content">
                <img src="/Images/ilustracionInicioMovil.png" alt="Ilustración móvil" class="mobile-illustration" />
                <div class="container-text-movile-inicio">
                    <div class="container-title-movile">
                        <h1 class="mobile-title">CUANDO ALGO FALLA, NOSOTROS RESPONDEMOS</h1>
                    </div>
                    <div class="container-subtitle-movile">
                        <p class="mobile-subtitle">
                                Especialistas en mantenimiento y urgencias
                                para empresas del sector de la hostelería y la restauración.
                        </p>
                    </div>
                    <a href="#contacto" class="container-btn-movil-inicio">
                        <v-btn variant="outlined" rounded="xl" class="btn-movil-inicio">
                            Solicitar Presupuesto
                        </v-btn>
                    </a>
                </div>
            </div>
        </v-row>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import mapaImage from "@images/mapa.svg";
import furgoImage from "@images/furgo.svg";
import NavLink from "../NavLink.vue";

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

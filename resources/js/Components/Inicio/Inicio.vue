<template>
    <div class="home-section">
        <v-row class="hero-section">

            <div class="home-images">

                <div class="furgo-text">
                    <!-- Furgoneta -->
                    <div class="image-furgo">
                        <div class="path-wrapper">
                            <img :src="furgoImage" alt="Furgoneta" class="van-image" />
                        </div>
                    </div>

                    <div class="text-service-desktop">
                        <h1>CUANDO ALGO FALLA, NOSOTROS RESPONDEMOS</h1>
                        <p class="subtitle">
                            Especialistas en <strong>mantenimiento</strong> y <strong>urgencias</strong>
                            para empresas del sector de la hostelería y la restauración.
                        </p>
                        <div class="btn-solicitud">
                            <NavLink href="#" variant="outlined" rounded="xl" class="btn-public">
                                Solicitar Presupuesto
                            </NavLink>
                        </div>
                    </div>
                </div>

                <!-- Mapa -->
                <div cols="12" class="map-container max-width">
                    <div class="map-wrapper">
                        <img :src=mapaImage alt="Mapa" class="map-image" />
                        <div class="map-overlay"></div>
                    </div>
                </div>

            </div>
            <!-- Texto -->
            <div class="text-service">
                                    <h1>CUANDO ALGO FALLA, NOSOTROS RESPONDEMOS</h1>
                                    <p class="subtitle">
                                        Especialistas en <strong>mantenimiento</strong> y <strong>urgencias</strong>
                                        para empresas del sector de la hostelería y la restauración.
                                    </p>
                                    <div class="btn-solicitud">
                                        <NavLink href="#" variant="outlined" rounded="xl" class="btn-public">
                                            Solicitar Presupuesto
                                        </NavLink>
                                    </div>
                                </div>
                    </v-row>
            </div>
</template>

<script setup>
import mapaImage from "@images/mapa.svg";
import furgoImage from "@images/furgo.svg";
import NavLink from "../NavLink.vue";
</script>

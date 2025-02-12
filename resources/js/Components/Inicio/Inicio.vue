<template>
    <div class="home-section">
      <v-row class="hero-section">
        <!-- Texto -->
        <v-col class="text-service">
          <h1>CUANDO ALGO FALLA, NOSOTROS RESPONDEMOS</h1>
          <p class="subtitle">
            Especialistas en <strong>mantenimiento</strong> y <strong>urgencias</strong>
            para empresas del sector de la hostelería y la restauración.
          </p>
          <v-btn variant="outlined" rounded="xl" class="mt-4">
            Solicitar Presupuesto
          </v-btn>
        </v-col>

        <!-- Mapa -->
        <v-col cols="12" class="map-container">
          <div class="map-wrapper">
            <img src="/Images/mapa.svg" alt="Mapa" class="map-image" />
            <div class="map-overlay"></div>
          </div>
        </v-col>
      </v-row>
    </div>
</template>

<script>
export default {
  name: "HeroSection",
};
</script>

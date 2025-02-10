<template>
    <div class="home-section">
      <v-row class="hero-section">

        <!-- Furgoneta -->
        <v-col class="text-left">
          <div class="path-wrapper">
            <img src="/Images/furgo.svg" alt="Furgoneta" class="van-image" />
          </div>
        </v-col>

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

        <!-- Sección de Descuento -->
        <v-col cols="12" class="discount-section">
          <img src="/Images/sombra.svg" alt="Sombra" class="sombra-image"/>

          <!-- Textos -->
          <div class="discount-text-left">
              <p>Repara, previene, y sigue funcionando pero con un...</p>
          </div>

          <div class="discount-text">
              <h2>50%</h2>
              <p>de descuento en los primeros</p>
              <h2 class="bold">3 meses</h2>
              <p>en locales de nueva apertura</p>
          </div>

          <div class="discount-text-right">
              <p>Aprovecha! Tu negocio nunca se detiene!</p>
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

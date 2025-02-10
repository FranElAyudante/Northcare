<template>
    <div class="services-section">
      <h1 class="title">Nuestros Servicios</h1>

      <div v-for="(service, index) in services" :key="index" class="service-item">
        <div class="service-header" @click="toggleService(index)">
          <v-icon class="toggle-icon">{{ activeService === index ? 'mdi-minus' : 'mdi-plus' }}</v-icon>
          <h2 class="service-title">{{ service.title }}</h2>
        </div>

        <transition name="fade">
          <div v-if="activeService === index" class="service-content">
            <p>{{ service.text }}</p>
          </div>
        </transition>

        <div class="service-image" :class="{ 'active': activeService === index }">
          <img :src="service.image" :alt="service.alt" />
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        activeService: null,
        services: [
          { title: "Mantenimientos Preventivos", text: "Descripción detallada del servicio de mantenimiento.", image: "/Images/caminoPreventivos.svg", alt: "Mantenimiento preventivo" },
          { title: "Reparaciones de Urgencia", text: "Descripción sobre cómo actuamos en emergencias.", image: "/Images/caminoUrgencia.svg", alt: "Reparaciones de urgencia" },
          { title: "Instalaciones Especializadas", text: "Explicación sobre instalaciones técnicas.", image: "/Images/caminoInstalaciones.svg", alt: "Instalaciones especializadas" },
        ],
      };
    },
    methods: {
      toggleService(index) {
        this.activeService = this.activeService === index ? null : index;
      },
    },
  };
  </script>

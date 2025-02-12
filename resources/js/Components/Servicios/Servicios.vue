<template>
    <div class="services-section">
      <h1 class="title">Nuestros Servicios</h1>

      <div class="services-container">
        <v-expansion-panels v-model="activeService" class="transparent-panel">
          <v-expansion-panel v-for="(service, index) in services" :key="index" :value="index" class="transparent-panel-item">
            <v-expansion-panel-title>
              <span class="service-title">{{ service.title }}</span>
              <v-icon class="toggle-icon">{{ activeService === index ? 'mdi-minus' : 'mdi-plus' }}</v-icon>
            </v-expansion-panel-title>

            <v-expansion-panel-text>
              <div class="service-content">
                <div class="service-text">
                  <p>{{ service.text }}</p>
                </div>
                <div class="service-details">
                  <p v-html="service.details"></p>
                </div>
              </div>
            </v-expansion-panel-text>

            <!-- Imagen fija al centro -->
            <div class="service-image-container">
                <img :src="service.image" :alt="service.alt" class="van-image-service" />
            </div>
          </v-expansion-panel>
        </v-expansion-panels>

      </div>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';

  const activeService = ref(null);
  const services = ref([
    {
      title: "Mantenimientos Preventivos",
      text: "Con el mantenimiento preventivo, tanto normativo obligatorio como no normativo, aseguras que todos tus equipos estén siempre en perfecto estado. Al anticipar posibles fallos, garantizas el correcto funcionamiento de tus instalaciones, evitando sorpresas y asegurando que todo esté siempre bajo control para la tranquilidad de tu negocio.",
      details: "Preventivos de Aire Acondicionado, Mantenimiento de Equipos de Refrigeración, Preventivos de Electricidad Baja Tensión, Control de plagas, Fontanería y desatascos, Reparación de maquinaria de Hostelería, Cerrajería y Trabajos de albañilería y Pintura.",
      image: "/Images/caminoPreventivos.svg",
      alt: "Mantenimiento preventivo"
    },
    {
      title: "Reparaciones de Urgencia",
      text: "Ofrecemos soluciones rápidas y eficaces los 365 días del año. Con un único interlocutor para gestionar todas tus incidencias, no pierdas tiempo buscando ayuda: la solución está a una llamada de distancia.",
      details: "Fugas de agua, Apagones, Aparición de plagas, Puertas atascadas o cerraduras que no funcionan correctamente, Atascos en fregaderos, baños o desagües, Congeladores, Cámaras frigoríficas que dejan de funcionar y fallos en el aire acondicionado.",
      image: "/Images/caminoUrgencia.svg",
      alt: "Reparaciones de urgencia"
    },
    {
      title: "Instalaciones Especializadas",
      text: "Desde cámaras frigoríficas hasta freidoras y planchas, con precisión y profesionalismo para garantizar su rendimiento óptimo. Disfruta de una garantía de hasta un año, dependiendo del equipo, y la tranquilidad de contar con un servicio confiable y respaldado.",
      details: "Cámaras frigoríficas, Congeladores industriales, Vitrinas refrigeradas, Hornos industriales, Freidoras, Planchas/Parrillas, Filtros/Conductos de aire, Lavavajillas industriales y Campanas extractoras.",
      image: "/Images/caminoInstalaciones.svg",
      alt: "Instalaciones especializadas"
    }
  ]);
  </script>

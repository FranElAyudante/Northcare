<template>
    <div class="especialistas-garantia">
      <section class="especialistas">
        <h1 class="titulo">
          ESPECIALISTAS EN <span class="frio">FRÍO</span> Y <span class="clima">CLIMA</span>
        </h1>
        <p class="descripcion">
          Garantizamos el rendimiento óptimo de tus equipos de refrigeración y climatización industrial.
        </p>
      </section>

      <v-container class="info-container">
    <v-row>
      <v-col cols="12" class="text-white text-left">
        <h2 class="font-weight-bold text-uppercase">SIN COMPLICACIONES:</h2>
        <h3>Cuando nos necesites, ahí estaremos.</h3>
      </v-col>
    </v-row>

    <v-row>
      <v-col cols="12" md="6" class="text-white">
        <div v-for="(item, index) in infoItems" :key="index" class="info-item">
          <h4 class="font-italic font-weight-bold">{{ item.title }}</h4>
          <p>{{ item.text }}</p>
        </div>
      </v-col>

      <v-col cols="12" md="6" class="image-container">
        <v-img src="/images/kitchen.svg" alt="Cocina industrial" class="info-image"></v-img>
      </v-col>
    </v-row>
  </v-container>
    </div>
  </template>
<script>
export default {
  data() {
    return {
      infoItems: [
        { title: 'GARANTÍA', text: 'Tanto nuestros trabajos de mantenimiento como los de instalación y montaje cuentan con una garantía de 12 meses...' },
        { title: 'DISPONIBILIDAD', text: 'Siempre a tu lado, los 365 días del año, con un horario laboral de 9:00h a 21:00h...' },
        { title: 'INTERLOCUTOR ÚNICO', text: 'La comunicación con nosotros es directa y sin intermediarios...' },
        { title: 'SEGURIDAD EN LOS PRECIOS', text: 'Nuestros precios son completamente transparentes...' },
        { title: 'PRESENCIA', text: 'Estamos en Cantabria, País Vasco, Asturias, Pamplona, Logroño, Navarra y Norte de Castilla y León...' }
      ]
    };
  }
};
</script>

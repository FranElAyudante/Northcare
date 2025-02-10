<template>
    <v-container>
      <!-- Sección "Conoce un poco más sobre Northcare" -->
      <v-row class="bg-grey-darken-3 pa-6 rounded-lg">
        <v-col cols="12">
          <h2 class="text-white font-weight-bold">
            Conoce un poco más sobre <span class="text-primary">Northcare:</span>
          </h2>
          <p class="text-white text-h6">
            Cuidamos de tu negocio todos los días del año.
          </p>
          <p class="text-white">
            Northcare nace con el propósito de ser el aliado de confianza para empresas, negocios y locales de hostelería y restauración.
            Desde el primer día, nuestra razón de ser ha sido asegurar que nada interrumpa la esencia de lo que haces: atender a tus clientes y ofrecerles lo mejor.
          </p>
        </v-col>

        <!-- Beneficios -->
        <v-col v-for="(beneficio, index) in beneficios" :key="index" cols="12" sm="4">
          <v-card class="card-nosotros" elevation="0">
            <v-avatar size="40" class="mb-2" border="" color="transparent">{{ index + 1 }}</v-avatar>
            <h3 class="font-weight-bold">{{ beneficio.titulo }}</h3>
            <p>{{ beneficio.descripcion }}</p>
          </v-card>
        </v-col>

      <!-- Sección de Especialistas y Garantía -->
      <v-row class="mt-10">
        <v-col cols="12">
          <h2 class="text-white font-weight-bold">Nuestro Equipo:</h2>
          <p class="text-white">Son como héroes sin capa que solucionan o evitan grandes problemas a diario.</p>
        </v-col>
      </v-row>

      <v-row>
        <v-col v-for="(especialista, index) in especialistas" :key="index" cols="12" sm="4">
          <v-card class="pa-4" elevation="2">
            <v-img :src="especialista.foto" height="200px" class="grey lighten-2"></v-img>
            <v-card-title class="text-center">{{ especialista.nombre }}</v-card-title>
            <v-card-subtitle class="text-center">{{ especialista.cargo }}</v-card-subtitle>
          </v-card>
        </v-col>
      </v-row>

      <!-- Sección de Preguntas Frecuentes -->
      <v-row class="mt-10">
        <v-col cols="12">
          <h2 class="text-white font-weight-bold">PREGUNTAS FRECUENTES:</h2>
          <p class="text-white">La respuesta a todas (o casi todas) tus dudas.</p>
        </v-col>
      </v-row>

      <v-row>
        <v-col cols="12">
          <v-expansion-panels class="expansion-preguntas" :elevation="0">
            <v-expansion-panel  v-for="(pregunta, index) in preguntas" :key="index">
              <v-expansion-panel-title>{{ pregunta.pregunta }}</v-expansion-panel-title>
              <v-expansion-panel-text>{{ pregunta.respuesta }}</v-expansion-panel-text>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-col>
      </v-row>
    </v-row>
    </v-container>
  </template>

  <script setup>
  import { ref } from "vue";

  const beneficios = ref([
    { titulo: "Resolutivos", descripcion: "Encontramos la mejor solución para cualquier problema y garantizamos un correcto funcionamiento en tu negocio." },
    { titulo: "Ágiles y Rápidos", descripcion: "Actuamos con velocidad y precisión, minimizando tiempos de inactividad y asegurando que los imprevistos se resuelvan sin afectar la operación diaria." },
    { titulo: "Profesionales", descripcion: "Nuestro equipo está formado por expertos especializados que aportan conocimiento, experiencia y un trato impecable." }
  ]);

  const especialistas = ref([
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_1" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_2" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_3" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_4" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_5" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "URL_IMAGEN_6" }
  ]);

  const preguntas = ref([
    { pregunta: "¿A qué tipo de empresas ofrecéis estos servicios?", respuesta: "Nos especializamos en ofrecer soluciones a medida principalmente para todo el sector de la hostelería y la restauración: restaurantes, bares, cafeterías y cadenas de comida rápida, hoteles, hostales, resorts, etc. Sabemos que tu negocio tiene sus propias necesidades, y por ello, aquí encontrarás servicios diseñados específicamente para mantener todo bajo control.." },
    { pregunta: "¿Necesitamos detener nuestras operaciones durante el mantenimiento?", respuesta: "No, no es necesario. Nos esforzamos por mantener una comunicación clara y coordinada para adaptarnos a los horarios de tu negocio. Nuestro objetivo es realizar el mantenimiento sin interrumpir el funcionamiento del local, asegurando que todo siga en marcha mientras hacemos nuestro trabajo." },
    { pregunta: "¿Necesitamos detener nuestras operaciones durante un servicio de urgencias?", respuesta: "Salvo casos inevitables, no será necesario detener las operaciones. Nos adaptamos a las necesidades de tu negocio, incluso ajustando nuestro horario laboral para realizar las reparaciones en momentos que no interfieran con el funcionamiento del local. Nuestro objetivo es minimizar cualquier interrupción y resolver la urgencia de la forma más eficiente posible." },
    { pregunta: "¿En qué zonas ofrecéis los servicios?", respuesta: "Tanto nuestros trabajos de mantenimiento como los de instalación y montaje cuentan con una garantía de 12 meses. En el caso de instalaciones y montajes, la garantía puede variar dependiendo del tipo de maquinaria." },
    { pregunta: "¿Hay garantía por el trabajo realizado?", respuesta: "Nos puedes encontrar en Cantabria, País Vasco, Asturias, Pamplona, Logroño, Navarra y Norte de Castilla y León, con la posibilidad de atender también zonas limítrofes. Nuestro servicio se centra principalmente en la zona norte, asegurando una cobertura amplia y eficiente para tu negocio." }
  ]);
  </script>

  <style scoped>
  .text-white {
    color: white;
  }
  .bg-grey-darken-3 {
    background-color: #3D3C3C;
  }
  .rounded-lg {
    border-radius: 12px;
  }
  </style>

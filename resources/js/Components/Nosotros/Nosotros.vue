<template>
    <v-container>
        <!-- Sección "Conoce un poco más sobre Northcare" -->
        <v-row class="bg-grey-darken-3 rounded-lg container-nosotros-general">

            <v-col cols="12">
                <div class="container-equipo-text">
                    <h2 class="title-nosotros-beneficios">
                        <b>Conoce un poco más sobre Northcare:</b> Cuidamos de tu negocio todos los días del año.
                    </h2>
                    <p class="subtitle-nosotros-beneficios">
                        Northcare nace con el propósito de ser el aliado de confianza para empresas, negocios y locales
                        de
                        hostelería y restauración.
                        Desde el primer día, nuestra razón de ser ha sido asegurar que nada interrumpa la esencia de lo
                        que
                        haces: atender a tus clientes y ofrecerles lo mejor.
                    </p>
                </div>
            </v-col>

            <!-- Beneficios -->
            <v-col v-for="(beneficio, index) in beneficios" :key="index" cols="12" md="4">
                <v-card class="card-nosotros" elevation="0">
                    <v-avatar class=" avatar-beneficios" border="" color="transparent">{{ index + 1 }}</v-avatar>
                    <h3 class="title-beneficios font-weight-bold">{{ beneficio.titulo }}</h3>
                    <p>{{ beneficio.descripcion }}</p>
                </v-card>
            </v-col>

            <!-- Sección de Especialistas y Garantía -->
            <v-row class="mt-10">
                <v-col cols="12">
                    <h2 class="title-equipo"><b>Nuestro Equipo:</b> Son como héroes sin capa que solucionan o evitan
                        grandes problemas a diario.</h2>
                </v-col>
            </v-row>

            <v-row>
                <!-- Especialistas -->
                <v-col v-for="(especialista, index) in especialistas" :key="index" cols="6" md="4">
                    <v-card class="card-fotos" elevation="0">
                        <v-img :src="especialista.foto" height="200px" class="grey lighten-2"></v-img>
                        <v-card-title class="text-title-nombre text-center">{{ especialista.nombre }}</v-card-title>
                        <v-card-subtitle class="text-title-cargo text-center">{{ especialista.cargo }}</v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>

            <!-- Sección de Preguntas Frecuentes -->

            <div class="container-text-preguntas">
                <v-row class="mt-10">
                    <v-col cols="12">
                        <h2 class="title-nosotros"><b>PREGUNTAS FRECUENTES:</b></h2>
                        <h3 class="subtitle-nosotros">La respuesta a todas (o casi todas tus dudas).</h3>
                    </v-col>
                </v-row>
            </div>

            <v-row>
                <v-col cols="12">
                    <v-expansion-panels class="expansion-preguntas" :elevation="0">
                        <v-expansion-panel v-for="(pregunta, index) in preguntas" :key="index">
                            <v-expansion-panel-title class="title-preguntas">{{ pregunta.pregunta
                            }}</v-expansion-panel-title>
                            <v-expansion-panel-text class="text-preguntas">{{ pregunta.respuesta
                            }}</v-expansion-panel-text>
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
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" },
    { nombre: "Nombre Apellido", cargo: "Cargo", foto: "/Images/fotoPersona.svg" }
]);

const preguntas = ref([
    { pregunta: "¿A qué tipo de empresas ofrecéis estos servicios?", respuesta: "Nos especializamos en ofrecer soluciones a medida principalmente para todo el sector de la hostelería y la restauración: restaurantes, bares, cafeterías y cadenas de comida rápida, hoteles, hostales, resorts, etc. Sabemos que tu negocio tiene sus propias necesidades, y por ello, aquí encontrarás servicios diseñados específicamente para mantener todo bajo control." },
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

<template>
    <div class="especialistas-garantia">
        <section class="especialistas">
            <div class="conteiner-especialistas">
                <img class="img-especialistas" src="images/ESPECIALISTAS.svg">
            </div>
            <div class="conteiner-descripcion">
                <p class="descripcion">
                    Garantizamos el rendimiento óptimo de tus equipos de refrigeración y climatización industrial.
                </p>
            </div>
        </section>


        <v-container class="info-container">
            <div class="container-garantia">
                <v-row>
                    <v-col cols="12" class="text-white text-left">
                        <div class="title-garantia">SIN COMPLICACIONES:</div>
                        <div class="subtitle-garantia">Cuando nos necesites, ahí estaremos.</div>
                    </v-col>
                </v-row>
            </div>

            <v-row>
                <v-col cols="12" md="6" class="image-container">
                    <v-img src="/images/kitchen.svg" alt="Cocina industrial" class="info-image"></v-img>
                </v-col>
                <v-col md="6" class="text-garantia">
                    <div v-for="(item, index) in infoItems" :key="index" class="info-item">
                        <h4 class=" title-beneficios-text">{{ item.title }}</h4>
                        <p>{{ item.text }}</p>
                    </div>
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
                { title: 'GARANTÍA', text: 'Tanto nuestros trabajos de mantenimiento como los de instalación y montaje cuentan con una garantía de 12 meses. En el caso de instalaciones y montajes, la garantía puede variar dependiendo del tipo de maquinaria.' },
                { title: 'DISPONIBILIDAD', text: 'Siempre a tu lado, los 365 días del año, con un horario laboral de 9:00h a 21:00h adaptándonos en situaciones de urgencias. Si tu negocio no se detiene, nosotros tampoco.' },
                { title: 'INTERLOCUTOR ÚNICO', text: 'La comunicación con nosotros es directa y sin intermediarios. Hablarás siempre con la persona encargada, quien te guiará en todo momento y se asegurará de que todo el proceso sea ágil, claro y sin pérdidas de tiempo..' },
                { title: 'SEGURIDAD EN LOS PRECIOS', text: 'Nuestros precios son completamente transparentes. Trabajamos con tarifas definidas y siempre en base a acuerdos firmados, evitando sorpresas en la factura y asegurando que todo quede claro desde el principio.' },
                { title: 'PRESENCIA', text: 'Estamos en Cantabria, País Vasco, Asturias, Pamplona, Logroño, Navarra y Norte de Castilla y León, con la posibilidad de atender también zonas limítrofes. Nuestro servicio se centra principalmente en la zona norte, asegurando una cobertura amplia y eficiente para tu negocio.' }
            ]
        };
    }
};
</script>

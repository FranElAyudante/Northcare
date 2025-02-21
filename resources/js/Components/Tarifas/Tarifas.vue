<template>
    <section class="tarifas">
        <div class="title-tarifa">
            <h2><b>TARIFAS</b>: Encuentra la opción que mejor se adapta a las necesidades de tu negocio.</h2>
        </div>

        <div class="tarifas-grid">
            <v-card v-for="(tarifa, index) in tarifas" :key="index" class="tarifa-item" elevation="4">
                <v-card-title class="tarifa-title">{{ tarifa.nombre }}</v-card-title>

                <v-card-text :style="`background-color: ${tarifa.color} !important;`" class="tarifa-content">
                    <ul class="ul-tarifa">
                        <li v-for="(beneficio, i) in tarifa.beneficios" :key="i">
                            <v-icon class="check-icon">mdi-checkbox-marked-circle</v-icon>
                            {{ beneficio }}
                        </li>
                    </ul>
                </v-card-text>
            </v-card>
        </div>

        <div class="tarifa-footer">
            <p class="tarifa-info">
                *En algunos casos se aplicará costes de desplazamiento.<br />
                *Los materiales o recambios serán proporcionados por el cliente o facturados aparte en caso de
                suministrar nosotros.<br />
                *MANTENIMIENTO CORRECTIVO LUNES A VIERNES DE 9 A 18 HORAS. El precio por hora varía dependiendo de la
                tarifa que se aplique.<br />
                *URGENCIAS DE 18h A 21h Y FINES DE SEMANA DE 9h A 21h. El precio por hora varía dependiendo de la tarifa
                que se aplique.
            </p>

            <a href="#contacto" class="btn-header">
                <v-btn variant="outlined" rounded="xl" class="btn-tarifas">
                    Consultar Precios
                </v-btn>
            </a>

        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';

const tarifas = ref([
    {
        nombre: "Tarifa Basic (Trimestral)",
        beneficios: [
            "Mantenimiento preventivo trimestral de instalaciones de climatización.",
            "Mantenimiento preventivo trimestral de cámaras de refrigeración y congelación.",
            "Mantenimiento preventivo trimestral de motores de extracción e impulsión."
        ],
        color: "#FFFFFF"
    },
    {
        nombre: "Tarifa Complet (Trimestral)",
        beneficios: [
            "Mantenimiento preventivo trimestral de instalaciones de climatización.",
            "Mantenimiento preventivo trimestral de cámaras de refrigeración y congelación.",
            "Mantenimiento preventivo trimestral de motores de extracción e impulsión.",
            "Mantenimiento preventivo trimestral de arcones y neveras.",
            "Mantenimiento preventivo semestral de máquinas hielo.",
            "Mantenimiento preventivo semestral de freidoras."
        ],
        color: "#B0D9FF"
    },
    {
        nombre: "Tarifa Premium (Bimensual)",
        beneficios: [
            "Mantenimiento preventivo bimensual de instalaciones de climatización.",
            "Mantenimiento preventivo bimensual de cámaras de refrigeración y congelación.",
            "Mantenimiento preventivo bimensual de motores de extracción e impulsión.",
            "Mantenimiento preventivo bimensual de arcones y neveras.",
            "Mantenimiento preventivo bimensual de máquinas hielo.",
            "Mantenimiento preventivo bimensual de 4 equipos de cocina elegidos por el cliente.",
            "Mantenimiento preventivo bimensual de cuadro eléctrico e iluminación.",
            "Mantenimiento preventivo bimensual de fontanería.",
            "Revisión bimensual de desperfectos en paredes, techos, alicatados, elementos de decoración…"
        ],
        color: "#F5F5F5"
    }
]);
</script>

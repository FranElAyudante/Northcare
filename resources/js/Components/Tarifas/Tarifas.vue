<template>
    <section class="tarifas">
      <h2>TARIFAS: Encuentra la opción que mejor se adapta a las necesidades de tu negocio.</h2>
      <div class="tarifas-grid">
        <div v-for="(tarifa, index) in tarifas" :key="index" class="tarifa-item" :style="{ backgroundColor: tarifa.color }">
          <h3>{{ tarifa.nombre }}</h3>
          <ul>
            <li v-for="(beneficio, i) in tarifa.beneficios" :key="i">✔ {{ beneficio }}</li>
          </ul>
        </div>
      </div>
      <div class="tarifa-footer">
        <p>
            *En algunos casos se aplicará costes de desplazamiento.
            *Los materiales o recambios serán proporcionados por el cliente o facturados aparte en caso de suministrar nosotros.
            *MANTENIMIENTO CORRECTIVO LUNES A VIERNES DE 9 A 18 HORAS. El precio por hora varía dependiendo de la tarifa que se aplique.
            *URGENCIAS DE 18h A 21h Y FINES DE SEMANA DE 9h A 21h. El precio por hora varía dependiendo de la tarifa que se aplique.
        </p>
        <v-btn variant="outlined" rounded="xl" class="btn-tarifas">
            Consultar Precios
        </v-btn>
      </div>
    </section>
  </template>

  <script>
  export default {
    data() {
      return {
        tarifas: [
          {
            nombre: "Tarifa Basic (Trimestral)",
            beneficios: [
              "Mantenimiento preventivo de climatización",
              "Mantenimiento preventivo de refrigeración",
              "Mantenimiento preventivo de motores",
            ],
            color: "#FFFFFF",
          },
          {
            nombre: "Tarifa Complet (Trimestral)",
            beneficios: [
              "Todos los beneficios de la tarifa Basic",
              "Mantenimiento de arcones y neveras",
              "Mantenimiento de máquinas de hielo",
            ],
            color: "#B0D9FF",
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
            color: "#F5F5F5",
          },
        ],
      };
    },
  };
  </script>

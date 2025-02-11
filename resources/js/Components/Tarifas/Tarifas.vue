<template>
    <section class="tarifas">
      <div class="title-tarifa"><h2><b>TARIFAS</b>: Encuentra la opción que mejor se adapta a las necesidades de tu negocio.</h2></div>
      <div class="tarifas-grid-title"><div v-for="(tarifa,index) in tarifas" :key="index" class="title-items"> <h1>{{ tarifa.nombre }}</h1></div></div>
      <div class="tarifas-grid">
        <div v-for="(tarifa, index) in tarifas" :key="index" class="tarifa-item" :style="{ backgroundColor: tarifa.color }">
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
              "Mantenimiento preventivo trimestral de instalaciones de climatización.",
              "Mantenimiento preventivo trimestral de cámaras de refrigeración y congelación.",
              "Mantenimiento preventivo trimestral de motores de extracción e impulsión.",
            ],
            color: "#FFFFFF",
          },
          {
            nombre: "Tarifa Complet (Trimestral)",
            beneficios: [
              "Mantenimiento preventivo trimestral de instalaciones de climatización.",
              "Mantenimiento preventivo trimestral de cámaras de refrigeración y congelación.",
              "Mantenimiento preventivo trimestral de motores de extracción e impulsión.",
              "Mantenimiento preventivo trimestral de arcones y neveras.",
              "Mantenimiento preventivo semestral de máquinas hielo.",
              "Mantenimiento preventivo semestral de freidoras.",
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

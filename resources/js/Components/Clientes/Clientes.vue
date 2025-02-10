<template>
    <section class="clientes-confianza">
      <h2>ELLOS YA CONFÍAN EN NOSOTROS:</h2>
      <div class="clientes-grid">
        <div v-for="(cliente, index) in clientes" :key="index" class="cliente-item">
          <div class="cliente-icon" :style="{ backgroundColor: cliente.color }">
            <img :src="cliente.logo" :alt="cliente.nombre" />
          </div>
        </div>
      </div>
    </section>
  </template>

  <script>
  export default {
    data() {
      return {
        clientes: [
          { nombre: "Burger King", logo: "/Images/logoBk.svg"},
          { nombre: "The Berty’s", logo: "/Images/logoBertys.svg"},
          { nombre: "SGX", logo: "/Images/logoSgx.svg"},
          { nombre: "Popeyes", logo: "/Images/LogoPopeyes.svg"},
        ],
      };
    },
  };
  </script>

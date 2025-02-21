<template>
  <div class="header-page">
    <v-row justify="space-between" align="center" class="pa-4">
      <!-- Logo -->
      <v-col cols="auto">
        <a href="#inicio">
          <img src="/Images/logo.png" alt="Northcare Logo" class="logo" />
        </a>
      </v-col>

      <!-- Menú Desktop -->
      <v-col class="btns-header d-none d-md-flex">
        <a href="#servicios">
          <v-btn class="btn-header">Servicios</v-btn>
        </a>
        <a href="#tarifas">
          <v-btn variant="text" class="btn-header">Tarifas</v-btn>
        </a>
        <a href="#nosotros">
          <v-btn variant="text" class="btn-header">Quiénes Somos</v-btn>
        </a>
        <a href="#contacto" class="btn-public">
          Solicitar Presupuesto
        </a>
      </v-col>

      <!-- Botón menú en móviles -->
      <v-col class="menu-icon d-flex d-md-none" @click="toggleMenu">
        <v-icon>{{ menuOpen ? 'mdi-close' : 'mdi-menu' }}</v-icon>
      </v-col>
    </v-row>

    <!-- Menú desplegable en móviles -->
    <transition name="slide">
      <div v-if="menuOpen" class="mobile-menu">
        <a href="#servicios" @click="toggleMenu">
          <v-btn variant="text" block>Servicios</v-btn>
        </a>
        <a href="#tarifas" @click="toggleMenu">
          <v-btn variant="text" block>Tarifas</v-btn>
        </a>
        <a href="#nosotros" @click="toggleMenu">
          <v-btn variant="text" block>Quiénes Somos</v-btn>
        </a>
        <a href="#contacto" class="btn-public" block @click="toggleMenu">
          Solicitar Presupuesto
        </a>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from "vue";

const menuOpen = ref(false);
const toggleMenu = () => {
  menuOpen.value = !menuOpen.value;
};
</script>

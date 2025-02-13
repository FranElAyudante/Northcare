<template>
    <div class="header-page">
      <v-row justify="space-between" align="center" class="pa-4">
        <!-- Logo -->
        <v-col cols="auto">
          <img src="/Images/logo.png" alt="Northcare Logo" class="logo" />
        </v-col>

        <!-- Menú Desktop -->
        <v-col class="btns-header d-none d-md-flex">
          <v-btn variant="text">Servicios</v-btn>
          <v-btn variant="text">Tarifas</v-btn>
          <v-btn variant="text">Quiénes Somos</v-btn>
          <NavLink href="#" class="btn-public">
            Solicitar Presupuesto
          </NavLink>
        </v-col>

        <!-- Botón menú en móviles -->
        <v-col class="menu-icon d-flex d-md-none" @click="toggleMenu">
          <v-icon>{{ menuOpen ? 'mdi-close' : 'mdi-menu' }}</v-icon>
        </v-col>
      </v-row>

      <!-- Menú desplegable en móviles -->
      <transition name="slide">
        <div v-if="menuOpen" class="mobile-menu">
          <v-btn variant="text" block @click="toggleMenu">Servicios</v-btn>
          <v-btn variant="text" block @click="toggleMenu">Tarifas</v-btn>
          <v-btn variant="text" block @click="toggleMenu">Quiénes Somos</v-btn>
          <NavLink href="#" class="btn-public" block>
            Solicitar Presupuesto
          </NavLink>
        </div>
      </transition>
    </div>
</template>

<script setup>
import { ref } from "vue";
import NavLink from "../NavLink.vue";

const menuOpen = ref(false);

const toggleMenu = () => {
  menuOpen.value = !menuOpen.value;
};
</script>

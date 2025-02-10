<template>
    <v-container fluid class="footer bg-black text-white py-6">
        <v-row justify="space-between">

        <!-- Imagen de la furgoneta -->
        <div class="van-container">
            <img :src="imgPrueba" alt="Van" class="van-animation" />
        </div>

        <!-- Línea divisoria -->
        <v-divider class="my-4 border-opacity-50"></v-divider>

        <!-- Copyright y desarrollador -->
        <v-col cols="12" md="6" class="text-left">
          <p>Northcare | Copyright 2025</p>
          <p class="text-caption font-italic">
            Web desarrollada por <strong>Blackcat</strong> con un código feroz y un rendimiento salvaje.
          </p>
        </v-col>

        <!-- Menú de enlaces -->
        <v-col cols="12" md="6" class="text-right">
          <a href="#" class="text-white text-decoration-none mx-2">Preguntas Frecuentes</a> |
          <a href="#" class="text-white text-decoration-none mx-2">Política de Privacidad</a> |
          <a href="#" class="text-white text-decoration-none mx-2">Aviso Legal</a> |
          <a href="#" class="text-white text-decoration-none mx-2">Política de Cookies</a>
        </v-col>
      </v-row>
    </v-container>
  </template>

  <script setup>
  import imgPrueba from "@images/footer.svg";
  </script>

  <style scoped>
  .bg-black {
    background-color: black;
  }
  .text-white {
    color: white;
  }

  /* Animación de la furgoneta */
  .van-container {
    position: relative;
    overflow: hidden;
    padding-left: 1150px;
  }
  .van-animation {
    right: -100px;
    bottom: 0;
    width: 80px;
    animation: drive 5s linear infinite;
  }

  @keyframes drive {
    0% {
      right: -100px;
    }
    100% {
      right: 100%;
    }
  }
  </style>

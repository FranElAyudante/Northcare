<template>
    <div class="header-page">
        <v-row justify="space-between" align="center" class="pa-4">
          <v-col class="logo-northcare" cols="4">
            <img src="/Images/logo.png" alt="Northcare Logo" class="logo" />
          </v-col>
          <v-col class="btns-header">
            <v-btn variant="text">Servicios</v-btn>
            <v-btn variant="text">Tarifas</v-btn>
            <v-btn variant="text">Quiénes Somos</v-btn>
            <v-btn variant="outlined" rounded="xl">Solicitar Presupuesto</v-btn>
          </v-col>
        </v-row>
    </div>
  </template>

  <script>

  export default {
    name: "HeaderPage"
  };
  </script>

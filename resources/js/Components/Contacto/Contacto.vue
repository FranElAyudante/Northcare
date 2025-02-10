<template>
    <v-container>
      <v-row class="bg-black text-white pa-6 rounded-lg">
        <v-col cols="12" md="6">
          <h2 class="font-weight-bold text-h5">
            <span class="text-white">CONTACTO:</span> Rellena tus datos y antes de que te des cuenta, estaremos ahí.
          </h2>

          <v-form ref="form">
            <v-text-field v-model="nombre" label="Nombre" variant="underlined" class="custom-input" required></v-text-field>
            <v-text-field v-model="telefono" label="Teléfono" variant="underlined" class="custom-input" required></v-text-field>
            <v-text-field v-model="correo" label="Correo" variant="underlined" class="custom-input" type="email" required></v-text-field>
            <v-textarea v-model="mensaje" label="Mensaje" variant="underlined" class="custom-input"></v-textarea>

            <v-checkbox v-model="aceptar" class="text-white">
              <template #label>
                <span class="text-white text-caption">
                  He leído y aceptado la <a href="#" class="text-primary">Política de Privacidad</a> y el Tratamiento de Formularios.
                </span>
              </template>
            </v-checkbox>

            <v-btn :disabled="!aceptar" class="rounded-pill mt-4" variant="outlined" color="white" block>
              enviar
            </v-btn>
          </v-form>
        </v-col>

        <!-- Información de contacto y redes sociales -->
        <v-col cols="12" md="6" class="text-right">
          <div class="mb-3">
            <a href="#" class="text-white text-decoration-none mx-2">facebook</a>
            <a href="#" class="text-white text-decoration-none mx-2">instagram</a>
            <a href="#" class="text-white text-decoration-none mx-2">linkedin</a>
          </div>
          <p class="text-white">info@northcare.es</p>
          <p class="text-white">644 06 55 44</p>
          <p class="text-white">603 08 17 40</p>
          <p class="text-white">C/ Aurelio Espinosa, 11-4C Santander, Cantabria, España</p>
        </v-col>
      </v-row>
    </v-container>
  </template>

  <script setup>
  import { ref } from "vue";

  const nombre = ref("");
  const telefono = ref("");
  const correo = ref("");
  const mensaje = ref("");
  const aceptar = ref(false);
  </script>

  <style scoped>
  .bg-black {
    background-color: black;
  }
  .text-white {
    color: white;
  }
  .custom-input ::v-deep(.v-input__control) {
    border-bottom: 1px solid white !important;
  }
  </style>

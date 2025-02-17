<template>
    <v-card class="title-card-contact" title="¿Cuál es el servicio que necesitas?" flat>
      <v-container>
        <v-row>
          <v-col cols="6">
            <v-radio v-model="localServiceType" label="Mantenimiento preventivo" value="mantenimiento" @change="updateFormData" />
          </v-col>
          <v-col cols="6">
            <v-radio v-model="localServiceType" label="Avería / Reparación" value="reparacion" @change="updateFormData" />
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="6">
            <v-radio v-model="localServiceType" label="Montaje / Instalación" value="montaje" @change="updateFormData" />
          </v-col>
          <v-col cols="6">
            <v-radio v-model="localServiceType" label="Atención de urgencias" value="urgencias" @change="updateFormData" />
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </template>

  <script>
  export default {
    data() {
      return {
        localServiceType: ''
      };
    },
    methods: {
      updateFormData() {
        // Emitir solo si hay un valor seleccionado
        if (this.localServiceType) {
          this.$emit('update-service-type', this.localServiceType);
        }
      }
    }
  };
  </script>

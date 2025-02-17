<template>
    <v-card class="title-card-contact" title="¿Cuál es el servicio que necesitas?" flat>
      <v-container>
        <v-radio-group v-model="localServiceType" @update:modelValue="updateFormData">
          <v-row>
            <v-col cols="6">
              <v-radio label="Mantenimiento preventivo" value="mantenimiento" />
            </v-col>
            <v-col cols="6">
              <v-radio label="Avería / Reparación" value="reparacion" />
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="6">
              <v-radio label="Montaje / Instalación" value="montaje" />
            </v-col>
            <v-col cols="6">
              <v-radio label="Atención de urgencias" value="urgencias" />
            </v-col>
          </v-row>
        </v-radio-group>
      </v-container>
    </v-card>
  </template>

  <script>
  export default {
    props: {
      modelValue: String, // Se usa v-model en el padre
    },
    computed: {
      localServiceType: {
        get() {
          return this.modelValue;
        },
        set(value) {
          this.$emit("update:modelValue", value);
        },
      },
    },
  };
  </script>

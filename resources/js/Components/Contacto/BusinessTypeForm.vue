<template>
    <v-card class="title-card-contact" title="¿Qué tipo de negocio/empresa eres?" flat>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-label class="font-weight-bold">Selecciona tu tipo de empresa</v-label>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Restauración" value="restauracion" color="red" class="custom-radio" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Hostelería" value="hosteleria" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Alimentación" value="alimentacion" @change="updateFormData" />
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Comercio (minorista)" value="comercio" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Grandes superficies" value="superficies" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localBusinessType" label="Cadenas de tiendas" value="cadenas" @change="updateFormData" />
          </v-col>
        </v-row>

        <v-divider class="my-4"></v-divider>

        <v-row>
          <v-col cols="12">
            <v-label class="font-weight-bold">Urgencia</v-label>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="4">
            <v-radio v-model="localUrgency" label="Sin prisa" value="sin-prisa" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localUrgency" label="Un poco de prisa" value="poco-prisa" @change="updateFormData" />
          </v-col>
          <v-col cols="4">
            <v-radio v-model="localUrgency" label="Inmediatamente" value="inmediatamente" @change="updateFormData" />
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </template>

  <script>
  export default {
    data() {
      return {
        localBusinessType: '',
        localUrgency: ''
      };
    },
    methods: {
      updateFormData() {
        // Emitir solo si hay cambios
        if (this.localBusinessType) {
          this.$emit('update-business-type', this.localBusinessType);
        }
        if (this.localUrgency) {
          this.$emit('update-urgency', this.localUrgency);
        }
      }
    }
  };
  </script>

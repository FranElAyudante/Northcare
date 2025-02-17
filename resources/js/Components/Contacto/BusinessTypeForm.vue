<template>
    <v-card flat>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-label class="font-weight-bold">Selecciona tu tipo de empresa</v-label>
          </v-col>
        </v-row>

        <v-radio-group v-model="localBusinessType" @change="$emit('update:businessType', localBusinessType)">
          <v-row>
            <v-col cols="4">
              <v-radio label="Restauración" value="restauracion" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Hostelería" value="hosteleria" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Alimentación" value="alimentacion" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Comercio (minorista)" value="comercio" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Grandes superficies" value="superficies" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Cadenas de tiendas" value="cadenas" />
            </v-col>
          </v-row>
        </v-radio-group>

        <v-divider class="my-4"></v-divider>

        <v-label class="font-weight-bold">Urgencia</v-label>
        <v-radio-group v-model="localUrgency" @change="$emit('update:urgency', localUrgency)">
          <v-row>
            <v-col cols="4">
              <v-radio label="Sin prisa" value="sin-prisa" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Un poco de prisa" value="poco-prisa" />
            </v-col>
            <v-col cols="4">
              <v-radio label="Inmediatamente" value="inmediatamente" />
            </v-col>
          </v-row>
        </v-radio-group>
      </v-container>
    </v-card>
  </template>

  <script>
  export default {
    props: {
      businessType: {
        type: String,
        default: ""
      },
      urgency: {
        type: String,
        default: ""
      }
    },
    data() {
      return {
        localBusinessType: this.businessType,
        localUrgency: this.urgency
      };
    },
    watch: {
      businessType(newVal) {
        this.localBusinessType = newVal;
      },
      urgency(newVal) {
        this.localUrgency = newVal;
      }
    },
    emits: ["update:businessType", "update:urgency"]
  };
  </script>

<template>
    <v-card class="title-card-contact" title="Datos personales" flat>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field label="Empresa" v-model="form.company" required></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Nombre" v-model="form.name" required></v-text-field>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="12">
            <v-text-field label="Email" v-model="form.email" required></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Teléfono" v-model="form.phone" required></v-text-field>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="6">
            <v-select label="Provincia" :items="provincias" item-title="nm" item-value="id"
              v-model="form.province" placeholder="Selecciona una provincia" required>
            </v-select>
          </v-col>
          <v-col cols="6">
            <v-select label="Localidad" :items="filteredMunicipios" item-title="nm" item-value="id"
              v-model="form.locality" placeholder="Selecciona una localidad" required>
            </v-select>
          </v-col>
        </v-row>

        <!-- Botón de enviar -->
        <v-row>
          <v-col cols="12" class="text-right">
            <v-btn color="primary" @click="submitForm">Enviar</v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </template>

  <script>
  import { useForm } from "@inertiajs/vue3";
  import provinciaData from "@/json/provincias.json";
  import municipiosData from "@/json/municipios.json";

  export default {
    props: {
      modelValue: Object,
    },
    computed: {
      form: {
        get() {
          return this.modelValue;
        },
        set(value) {
          this.$emit("update:modelValue", value);
        },
      },
      filteredMunicipios() {
        if (!this.form.province) return [];
        const selectedProvinciaPrefix = this.form.province.substring(0, 2);
        return this.municipios.filter((municipio) =>
          municipio.id.startsWith(selectedProvinciaPrefix)
        );
      },
      provincias() {
            return this.provincias || []; // Si provincias es undefined, regresa un array vacío
      }
    },
    methods: {
      async submitForm() {
        if (!this.form.privacy) {
          alert("Debes aceptar la política de privacidad.");
          return;
        }

        try {
          await this.form.post("/contacto", {
            tipo_empresa: this.form.businessType,
            urgencia: this.form.urgency,
            servicio: this.form.serviceType,
            empresa: this.form.company,
            nombre: this.form.name,
            email: this.form.email,
            telefono: this.form.phone,
            provincia: this.form.province,
            localidad: this.form.locality,
          });

          alert("Formulario enviado con éxito.");
        } catch (error) {
          console.error("Error al enviar el formulario:", error);
          alert("Hubo un problema al enviar el formulario. Intenta de nuevo más tarde.");
        }
      },
    },
  };
  </script>

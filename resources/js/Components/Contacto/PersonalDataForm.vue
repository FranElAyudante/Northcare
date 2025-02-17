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

        <v-row>
          <v-col cols="12">
            <v-checkbox v-model="form.privacy" label="He leído y aceptado la Política de Privacidad." required></v-checkbox>
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
  import { useForm } from '@inertiajs/vue3';
  import provinciaData from "@/json/provincias.json";
  import municipiosData from "@/json/municipios.json";

  export default {
    data() {
      return {
        provincias: provinciaData,
        municipios: municipiosData,
      };
    },
    setup() {
      const form = useForm({
        company: '',
        name: '',
        email: '',
        phone: '',
        province: '',
        locality: '',
        privacy: false,
      });

      // Función para enviar el formulario
      const submitForm = async () => {
        if (!form.privacy) {
          alert('Debes aceptar la política de privacidad.');
          return;
        }

        // Verifica si los datos están correctos
        console.log(form);

        try {
          const response = await form.post('/contacto', {
            tipo_empresa: this.businessType,
            urgencia: this.urgency,
            servicio: this.serviceType,
            empresa: form.company,
            nombre: form.name,
            email: form.email,
            telefono: form.phone,
            provincia: form.province,
            localidad: form.locality,
          });

          // Si todo es exitoso
          alert('Formulario enviado con éxito.');
        } catch (error) {
          // Si hay un error
          console.error('Error al enviar el formulario:', error);
          alert('Hubo un problema al enviar el formulario. Intenta de nuevo más tarde.');
        }
      };

      return {
        form,
        submitForm
      };
    },
    computed: {
      filteredMunicipios() {
        if (!this.form.province) return [];
        const selectedProvinciaPrefix = this.form.province.substring(0, 2);
        return this.municipios.filter((municipio) =>
          municipio.id.startsWith(selectedProvinciaPrefix)
        );
      },
    },
  };
  </script>

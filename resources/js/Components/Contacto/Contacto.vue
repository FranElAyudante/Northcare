<template>
    <v-container class="contact-form-container">
      <!-- Información de contacto -->
      <div class="conteiner-contact-info">
        <v-row class="mt-5">
          <v-col cols="12" md="6">
            <h2 class="font-weight-bold text-h5 text-white">
              CONTACTO: Rellena tus datos y en breve nos pondremos en contacto.
            </h2>
          </v-col>
          <v-col cols="12" md="6" class="text-right">
            <div class="mb-3">
              <a href="#" class="text-white text-decoration-none mx-2">Facebook</a>
              <a href="#" class="text-white text-decoration-none mx-2">Instagram</a>
              <a href="#" class="text-white text-decoration-none mx-2">LinkedIn</a>
            </div>
            <p class="text-white">info@northcare.es</p>
            <p class="text-white">644 06 55 44</p>
            <p class="text-white">603 08 17 40</p>
            <p class="text-white">C/ Aurelio Espinosa, 11-4C Santander, Cantabria, España</p>
          </v-col>
        </v-row>
      </div>

      <v-card class="contact-form-card">
        <v-stepper v-model="step" class="custom-stepper" hide-actions alt-labels
            :items="['¿Qué tipo de negocio/empresa eres?', 'Tipo de servicio', 'Datos personales']">

          <!-- Paso 1: Tipo de negocio -->
          <template v-slot:item.1>
            <business-type-form @update-business-type="updateBusinessType" @update-urgency="updateUrgency" />
          </template>

          <!-- Paso 2: Tipo de servicio -->
          <template v-slot:item.2>
            <service-type-form @update-service-type="updateServiceType" />
          </template>

          <!-- Paso 3: Datos personales -->
          <template v-slot:item.3>
            <personal-data-form :form="form" :provincias="provincias" :municipios="filteredMunicipios" @submit-form="submitForm" />
          </template>

        </v-stepper>

        <!-- Botones de acción personalizados -->
        <v-row justify="space-between">
          <v-col v-if="step > 1">
            <!-- Botón 'Anterior' solo visible en pasos 2 y 3 -->
            <v-btn @click="step--" :disabled="step === 1">Anterior</v-btn>
          </v-col>

          <v-col class="text-right">
            <!-- Botón 'Siguiente' en paso 1 y 'Siguiente' en paso 2 -->
            <v-btn v-if="step < 3" @click="nextStep">
              Siguiente
            </v-btn>

            <!-- Botón 'Enviar' en paso 3 -->
            <v-btn v-if="step === 3" @click="submitForm">
              Enviar
            </v-btn>
          </v-col>
        </v-row>
      </v-card>

      <div class="imgNorte-conteiner">
        <img src="/images/CuidandoNorte.svg" alt="CuidandoNorte" class="img-norte" />
      </div>
    </v-container>
  </template>

  <script>
  import { useForm } from '@inertiajs/vue3';
  import provinciaData from "@/json/provincias.json";
  import municipiosData from "@/json/municipios.json";
  import BusinessTypeForm from './BusinessTypeForm.vue';
  import ServiceTypeForm from './ServiceTypeForm.vue';
  import PersonalDataForm from './PersonalDataForm.vue';

  export default {
    components: {
      BusinessTypeForm,
      ServiceTypeForm,
      PersonalDataForm,
    },
    data() {
      return {
        step: 1,
        businessType: '',
        urgency: '',
        serviceType: '',
        provincias: provinciaData,
        municipios: municipiosData,
        form: useForm({
          company: '',
          name: '',
          email: '',
          phone: '',
          province: '',
          locality: '',
          privacy: false,
        }),
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
    methods: {
      updateBusinessType(businessType) {
        this.businessType = businessType;
      },
      updateUrgency(urgency) {
        this.urgency = urgency;
      },
      updateServiceType(serviceType) {
        this.serviceType = serviceType;
      },
      nextStep() {
        if (this.step < 3) this.step++;
      },
      submitForm() {
        this.form.post('/contacto', {
          tipo_empresa: this.businessType,
          urgencia: this.urgency,
          servicio: this.serviceType,
          empresa: this.form.company.value,
          nombre: this.form.name.value,
          email: this.form.email,
          telefono: this.form.phone,
          provincia: this.form.province,
          localidad: this.form.locality,
        })
        .then(response => {
          this.step = 4;
          alert('Formulario enviado con éxito.');
        })
        .catch(error => {
          console.error('Error al enviar el formulario', error);
          alert('Hubo un problema al enviar el formulario. Intenta de nuevo más tarde.');
        });
      },
    },
  };
  </script>

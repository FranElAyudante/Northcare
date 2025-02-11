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
      </v-row>>
    </div>

      <v-card class="contact-form-card">
        <v-stepper class="custom-stepper" alt-labels editable :items="['¿Qué tipo de negocio/empresa eres?', 'Tipo de servicio', 'Datos personales']">

            <template v-slot:item.1>
                <v-card class="title-card-contact" title="¿Qué tipo de negocio/empresa eres?" flat>
                    <v-container>
                    <v-row>
                        <v-col cols="12">
                        <v-label class="font-weight-bold">Selecciona tu tipo de empresa</v-label>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Restauración" value="restauracion" color="red" class="custom-radio"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Hostelería" value="hosteleria"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Alimentación" value="alimentacion"></v-radio>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Comercio (minorista)" value="comercio"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Grandes superficies" value="superficies"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="businessType" label="Cadenas de tiendas" value="cadenas"></v-radio>
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
                        <v-radio v-model="urgency" label="Sin prisa" value="sin-prisa"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="urgency" label="Un poco de prisa" value="poco-prisa"></v-radio>
                        </v-col>
                        <v-col cols="4">
                        <v-radio v-model="urgency" label="Inmediatamente" value="inmediatamente"></v-radio>
                        </v-col>
                    </v-row>
                    </v-container>
                </v-card>
            </template>

            <template v-slot:item.2>
                <v-card class="title-card-contact" title="¿Cuál es el servicio que necesitas?" flat>
                    <v-container>
                    <v-row>
                        <v-col cols="6">
                        <v-radio v-model="serviceType" label="Mantenimiento preventivo" value="mantenimiento"></v-radio>
                        </v-col>
                        <v-col cols="6">
                        <v-radio v-model="serviceType" label="Avería / Reparación" value="reparacion"></v-radio>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="6">
                        <v-radio v-model="serviceType" label="Montaje / Instalación" value="montaje"></v-radio>
                        </v-col>
                        <v-col cols="6">
                        <v-radio v-model="serviceType" label="Atención de urgencias" value="urgencias"></v-radio>
                        </v-col>
                    </v-row>
                    </v-container>
                </v-card>
            </template>

            <template  v-slot:item.3>
                <v-card class="title-card-contact" title="Datos personales" flat>
                    <v-container>
                    <v-row>
                        <v-col cols="6">
                        <v-text-field label="Empresa" v-model="form.company"></v-text-field>
                        </v-col>
                        <v-col cols="6">
                        <v-text-field label="Nombre" v-model="form.name"></v-text-field>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="6">
                        <v-text-field label="Email" v-model="form.email"></v-text-field>
                        </v-col>
                        <v-col cols="6">
                        <v-text-field label="Teléfono" v-model="form.phone"></v-text-field>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="6">
                        <v-select label="Provincia" :items="provinces" v-model="form.province"></v-select>
                        </v-col>
                        <v-col cols="6">
                        <v-select label="Localidad" :items="localities" v-model="form.locality"></v-select>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="12">
                        <v-checkbox v-model="form.privacy" label="He leído y aceptado la Política de Privacidad."></v-checkbox>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="12" class="text-center">
                        <v-btn color="primary" @click="submitForm">Enviar</v-btn>
                        </v-col>
                    </v-row>
                    </v-container>
                </v-card>
            </template>
        </v-stepper>

      </v-card>
    </v-container>
  </template>

  <script>
  export default {
    data() {
      return {
        businessType: '',
        urgency: '',
        serviceType: '',
        form: {
          company: '',
          name: '',
          email: '',
          phone: '',
          province: '',
          locality: '',
          privacy: false,
        },
        provinces: ['Provincia 1', 'Provincia 2', 'Provincia 3'],
        localities: ['Localidad 1', 'Localidad 2', 'Localidad 3'],
      };
    },
    methods: {
      submitForm() {
        console.log('Formulario enviado', this.form);
      },
    },
  };
  </script>


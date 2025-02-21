<template>
    <v-container class="contact-form-container">
        <!-- Información de contacto -->
        <div class="conteiner-contact-info">
            <v-row class="mt-5">
                <div></div>
                <v-col cols="12" md="6">
                    <div class="title-contacto">
                        <h2 class="text-contacto-title">
                            <b>CONTACTO:</b> Rellena tus datos y antes de que te des cuenta, estaremos ahí.
                        </h2>
                    </div>
                </v-col>
                <v-col cols="12" md="6" class="text-right">
                    <!-- Redes Sociales -->
                    <div class="mb-3 social-links">
                        <a href="#" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">LinkedIn</a>
                    </div>

                    <!-- Información de Contacto -->
                    <div>
                        <p class="text-white">info@northcare.es</p>
                        <p class="text-white">644 06 55 44</p>
                        <p class="text-white">603 08 17 40</p>
                        <p class="text-white address">
                            C/ Aurelio Espinosa, 11-4C <br />
                            Santander, Cantabria, España
                        </p>
                    </div>
                </v-col>
            </v-row>
        </div>

        <v-card class="contact-form-card">
            <v-stepper v-model="step" class="custom-stepper" hide-actions alt-labels
                :items="['¿Qué tipo de negocio/empresa eres?', 'Tipo de servicio', 'Datos personales']">

                <template v-slot:item.1>
                    <v-card class="title-card-contact" title="¿Qué tipo de agrupación eres?" flat>
                        <v-container>
                            <v-radio-group v-model="form.tipo_empresa">
                                <v-row>
                                    <v-col cols="6" md="4">
                                        <v-radio label="Restauración" value="restauracion"
                                            class="custom-radio item-contain-radio"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Hostelería"
                                            value="hosteleria"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Alimentación"
                                            value="alimentacion"></v-radio>
                                    </v-col>
                                </v-row>

                                <v-row class="section-radio-btn">
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Comercio (minorista)"
                                            value="comercio"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Grandes superficies"
                                            value="superficies"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Cadenas de tiendas"
                                            value="cadenas"></v-radio>
                                    </v-col>
                                </v-row>
                            </v-radio-group>
                        </v-container>
                    </v-card>
                    <v-card class="title-card-contact" title="Urgencia" flat>
                        <v-container>
                            <v-radio-group v-model="form.urgencia">
                                <v-row>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Sin prisa"
                                            value="sin-prisa"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Un poco de prisa"
                                            value="poco-prisa"></v-radio>
                                    </v-col>
                                    <v-col cols="6" md="4">
                                        <v-radio class="item-contain-radio" label="Inmediatamente"
                                            value="inmediatamente"></v-radio>
                                    </v-col>
                                </v-row>
                            </v-radio-group>
                            <div class="btn-container-form-siguiente">
                                <v-btn :height="$vuetify.display.mdAndUp ? 79 : 50"
                                    :min-width="$vuetify.display.mdAndUp ? 224 : '100%'" variant="text"
                                    class="btn-form-siguiente" @click="step++">
                                    Siguiente
                                </v-btn>
                            </div>
                        </v-container>
                    </v-card>
                </template>

                <template v-slot:item.2>
                    <v-card class="title-card-contact-servicio" title="¿Cuál es el servicio que necesitas?" flat>
                        <v-container>

                            <v-radio-group v-model="form.servicio">
                                <v-radio label="Mantenimiento preventivo" value="mantenimiento"></v-radio>
                                <v-radio label="Avería / Reparación" value="reparacion"></v-radio>
                                <v-radio label="Montaje / Instalación" value="instalacion"></v-radio>
                                <v-radio label="Atención de urgencias" value="urgencias"></v-radio>
                            </v-radio-group>
                            <div class="btn-container-step2">
                                <v-btn :height="$vuetify.display.mdAndUp ? 72 : 50"
                                    :min-width="$vuetify.display.mdAndUp ? 164 : '30%'" variant="text" class="btn-form"
                                    @click="step--">
                                    Atrás
                                </v-btn>
                                <v-btn :height="$vuetify.display.mdAndUp ? 72 : 50"
                                    :min-width="$vuetify.display.mdAndUp ? 164 : '30%'" variant="text" class="btn-form"
                                    @click="step++">
                                    Siguiente
                                </v-btn>
                            </div>
                        </v-container>
                    </v-card>
                </template>

                <template v-slot:item.3>
                    <v-card class="title-card-contact" title="Datos personales" flat>
                        <v-container>
                            <v-row>
                                <v-col cols="12">
                                    <v-text-field v-model="form.empresa" variant="underlined" label="Empresa"
                                        :error-messages="errors.empresa"></v-text-field>
                                </v-col>
                                <v-col cols="12">
                                    <v-text-field v-model="form.nombre" label="Nombre" variant="underlined"
                                        :error-messages="errors.nombre"></v-text-field>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col cols="12">
                                    <v-text-field v-model="form.email" label="Email" variant="underlined"
                                        :error-messages="errors.email"></v-text-field> </v-col>
                                <v-col cols="12">
                                    <v-text-field v-model="form.telefono" label="Teléfono" variant="underlined"
                                        :error-messages="errors.telefono"></v-text-field>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col cols="6">
                                    <v-select v-model="form.provincia" label="Provincia" variant="underlined"
                                        :items="provincias.map(p => p.nm)" :error-messages="errors.provincia">
                                    </v-select>
                                </v-col>
                                <v-col cols="6">
                                    <v-select v-model="form.localidad" label="Localidad" variant="underlined"
                                        :items="localidades" :error-messages="errors.localidad"
                                        :disabled="!localidades.length">
                                    </v-select>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col cols="12">
                                    <v-checkbox v-model="form.privacidad" label="Acepto la Política de Privacidad"
                                        :error-messages="errors.privacidad"></v-checkbox>
                                </v-col>
                            </v-row>

                            <div class="btn-container-step3">
                                <v-btn :height="$vuetify.display.mdAndUp ? 72 : 50"
                                    :min-width="$vuetify.display.mdAndUp ? 164 : '30%'" variant="text" class="btn-form"
                                    @click="step--">
                                    Atrás
                                </v-btn>
                                <div class="btn-submit-form" style="position: relative;">
                                    <v-btn :height="$vuetify.display.mdAndUp ? 72 : 50" min-width="164" variant="text"
                                        class="btn-form-submit" :disabled="form.processing" @click="enviarFormulario">
                                    </v-btn>
                                    <span class="txt-enviar">Enviar</span>
                                </div>
                            </div>
                        </v-container>
                    </v-card>
                </template>

            </v-stepper>
        </v-card>

        <div class="imgNorte-conteiner">
            <img src="/images/CuidandoNorte.png" alt="CuidandoNorte" class="img-norte" />
        </div>

    </v-container>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import provinciaData from "@/json/provincias.json";
import municipiosData from "@/json/municipios.json";


export default {
    data() {
        return {
            step: 1,
            form: useForm({
                tipo_empresa: '',
                urgencia: '',
                servicio: '',
                empresa: '',
                nombre: '',
                email: '',
                telefono: '',
                provincia: '',
                localidad: '',
                privacidad: false,
            }),
            errors: {},
            provincias: provinciaData,
            localidades: [],
        };
    },

    watch: {
        // Detectar cambio en la provincia seleccionada
        "form.provincia"(nuevoNombre) {
            this.filtrarLocalidades(nuevoNombre);
        }
    },

    methods: {
        filtrarLocalidades(nombreProvincia) {
            if (!nombreProvincia) {
                this.localidades = [];
                this.form.localidad = "";
                return;
            }

            // Buscar el ID de la provincia seleccionada
            const provinciaSeleccionada = this.provincias.find(p => p.nm === nombreProvincia);
            if (!provinciaSeleccionada) return;

            // Filtrar municipios que coincidan con los dos primeros dígitos del ID de la provincia
            this.localidades = municipiosData
                .filter(m => m.id.startsWith(provinciaSeleccionada.id))
                .map(m => m.nm); // Solo extraemos los nombres (nm)

            // Resetear localidad si cambia de provincia
            this.form.localidad = "";
        },

        enviarFormulario() {
            if (!this.validarFormulario()) return;

            this.form.post('/contacto', {
                onSuccess: () => {
                    alert('Formulario enviado correctamente');

                    this.form.reset();

                    this.errors = {};

                    this.localidades = [];

                    this.step = 1;
                },
                onError: (errors) => {
                    this.errors = errors;
                }
            });
        },

        validarFormulario() {
            this.errors = {};

            if (!this.form.empresa) this.errors.empresa = 'Este campo es obligatorio';
            if (!this.form.nombre) this.errors.nombre = 'Este campo es obligatorio';
            if (!this.form.email) this.errors.email = 'Este campo es obligatorio';
            if (!this.form.telefono) this.errors.telefono = 'Este campo es obligatorio';
            if (!this.form.provincia) this.errors.provincia = 'Este campo es obligatorio';
            if (!this.form.localidad) this.errors.localidad = 'Este campo es obligatorio';
            if (!this.form.privacidad) this.errors.privacidad = 'Debes aceptar la Política de Privacidad';

            return Object.keys(this.errors).length === 0;
        }
    }
};
</script>

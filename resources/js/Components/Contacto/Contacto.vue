<template>
    <v-container>
        <v-stepper v-model="step">
            <v-stepper-header>
                <v-stepper-step :complete="step > 1" step="1">Tipo de negocio</v-stepper-step>
                <v-stepper-step :complete="step > 2" step="2">Tipo de servicio</v-stepper-step>
                <v-stepper-step step="3">Datos personales</v-stepper-step>
            </v-stepper-header>

            <v-stepper-items>
                <v-stepper-content step="1">
                    <v-radio-group v-model="form.tipo_empresa">
                        <v-radio label="Restauración" value="restauracion"></v-radio>
                        <v-radio label="Hostelería" value="hosteleria"></v-radio>
                        <v-radio label="Alimentación" value="alimentacion"></v-radio>
                        <v-radio label="Comercio (minorista)" value="comercio"></v-radio>
                        <v-radio label="Grandes superficies" value="grandes"></v-radio>
                        <v-radio label="Cadenas de tiendas" value="cadenas"></v-radio>
                    </v-radio-group>
                    <v-radio-group v-model="form.urgencia">
                            <v-radio label="Sin prisa" value="sin-prisa" />
                            <v-radio label="Un poco de prisa" value="poco-prisa" />
                            <v-radio label="Inmediatamente" value="inmediatamente" />
                    </v-radio-group>
                    <v-btn @click="step++">Siguiente</v-btn>
                </v-stepper-content>

                <v-stepper-content step="2">
                    <v-radio-group v-model="form.servicio">
                        <v-radio label="Mantenimiento preventivo" value="mantenimiento"></v-radio>
                        <v-radio label="Avería / Reparación" value="reparacion"></v-radio>
                        <v-radio label="Montaje / Instalación" value="instalacion"></v-radio>
                        <v-radio label="Atención de urgencias" value="urgencias"></v-radio>
                    </v-radio-group>
                    <v-btn @click="step--">Atrás</v-btn>
                    <v-btn @click="step++">Siguiente</v-btn>
                </v-stepper-content>

                <v-stepper-content step="3">
                    <v-text-field v-model="form.empresa" label="Empresa"
                        :error-messages="errors.empresa"></v-text-field>
                    <v-text-field v-model="form.nombre" label="Nombre" :error-messages="errors.nombre"></v-text-field>
                    <v-text-field v-model="form.email" label="Email" :error-messages="errors.email"></v-text-field>
                    <v-text-field v-model="form.telefono" label="Teléfono"
                        :error-messages="errors.telefono"></v-text-field>
                    <v-select v-model="form.provincia" label="Provincia" :items="provincias"
                        :error-messages="errors.provincia"></v-select>
                    <v-select v-model="form.localidad" label="Localidad" :items="localidades"
                        :error-messages="errors.localidad"></v-select>
                    <v-checkbox v-model="form.privacidad" label="Acepto la Política de Privacidad"
                        :error-messages="errors.privacidad"></v-checkbox>

                    <v-btn @click="step--">Atrás</v-btn>
                    <v-btn :disabled="form.processing" @click="enviarFormulario">Enviar</v-btn>
                </v-stepper-content>
            </v-stepper-items>
        </v-stepper>
    </v-container>
</template>

<script>
import { useForm } from '@inertiajs/vue3';

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
            provincias: ['Madrid', 'Barcelona', 'Valencia'],
            localidades: ['Localidad 1', 'Localidad 2', 'Localidad 3'],
        };
    },
    methods: {
        enviarFormulario() {
            if (!this.validarFormulario()) return;

            this.form.post('/contacto', {
                onSuccess: () => {
                    alert('Formulario enviado correctamente');
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

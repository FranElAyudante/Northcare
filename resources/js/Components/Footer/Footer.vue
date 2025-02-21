<template>
    <v-container fluid class="footer bg-black text-white py-6">
        <v-row justify="center">
            <!-- Imagen de la furgoneta -->
            <v-col cols="12" class="van-container">
                <img :src="imgPrueba" alt="Van" class="van-animation" />
            </v-col>

            <!-- Línea divisoria -->
            <v-col class="linea-footer" cols="12">
                <v-divider class="my-4 border-opacity-50"></v-divider>
            </v-col>

            <!-- Copyright y desarrollador -->
            <v-col cols="12" md="6" class="text-center text-md-left">
                <p>Northcare | Copyright 2025</p>
                <p class="text-caption font-italic">
                    Web desarrollada por <strong>Blackcat</strong> con un código feroz y un rendimiento salvaje.
                </p>
            </v-col>

            <!-- Menú de enlaces -->
            <v-col cols="12" md="6" class="text-center text-md-right">
                <div class="footer-links">
                    <a href="#" class="text-white text-decoration-none">Preguntas Frecuentes</a>
                    <a href="#" class="text-white text-decoration-none">Política de Privacidad</a>
                    <a href="#" class="text-white text-decoration-none">Aviso Legal</a>
                    <a href="#" class="text-white text-decoration-none">Política de Cookies</a>
                </div>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup>
import imgPrueba from "@images/footer.svg";
</script>

<style scoped>
.bg-black {
    background-color: black;
}

.text-white {
    color: white;
}

.van-container {
    display: flex;
    justify-content: end;
    padding: 0;
    width: 150px !important;
    height: 50px !important;
    align-items: flex-end; /* Asegura que toque la línea */
    padding-bottom: 0;
    margin-bottom: -5px;/* Acerca más la furgoneta a la línea */
    @media (max-width:480px) {
        margin-bottom: -15px;
    }
}

.van-animation {
    max-width: 150px;/* Tamaño máximo en escritorio */
    width: 20%;/* Se ajusta en móviles */
    display: block;
}

.linea-footer {
    padding: 0;
    margin: 0;
}

/* Estilos del menú de enlaces */
.footer-links {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

.footer-links a {
    font-size: 14px;
}

/* Responsividad */
@media (max-width: 768px) {
    .text-md-left {
        text-align: center !important;
    }

    .text-md-right {
        text-align: center !important;
    }

    .footer-links {
        flex-direction: column;
        align-items: center;
    }
}
</style>

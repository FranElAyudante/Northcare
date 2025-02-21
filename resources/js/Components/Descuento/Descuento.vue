<template>
    <div>
        <div>
            <img class="camino-descuento" src="Images/caminoDescuento.svg"/>
        </div>
        <v-row class="descuento-contenedor">
            <!-- Sección de Descuento -->
            <v-col cols="12" class="discount-section">
                <!-- Overlay Oscuro -->
                <div class="overlay"></div>

                <!-- Textos -->
                <div class="discount-text-left">
                    <p>Repara, previene, y sigue funcionando pero con un...</p>
                </div>

                <div class="discount-text">
                   <v-img src="/images/descuento50.svg" alt="Cocina industrial" class="descuento-image"></v-img>
                    <p>de descuento en los primeros</p>
                   <v-img src="/images/meses.svg" alt="Cocina industrial" class="mes-image"></v-img>
                    <p>en locales de nueva apertura</p>
                </div>

                <div class="discount-text-right">
                    <p>¡Aprovecha! Tu negocio nunca se detiene!</p>
                </div>
            </v-col>
        </v-row>
    </div>
</template>

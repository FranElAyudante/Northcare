@component('mail::message')
# Nuevo Mensaje de Contacto

Estimado equipo,

Han recibido un nuevo mensaje a través del formulario de contacto. A continuación, se detallan los datos proporcionados:

@component('mail::table')
| Campo            | Información         |
|-----------------|---------------------|
| **Nombre**       | {{ $nombre }}       |
| **Empresa**      | {{ $empresa }}      |
| **Tipo de Empresa** | {{ $tipo_empresa }} |
| **Urgencia**     | {{ $urgencia }}     |
| **Servicio**     | {{ $servicio }}     |
| **Provincia**    | {{ $provincia }}    |
| **Localidad**    | {{ $localidad }}    |
| **Teléfono**     | {{ $telefono }}     |
| **Email**        | [{{ $email }}](mailto:{{ $email }}) |
@endcomponent

Por favor, revisen esta información y tomen las acciones necesarias.

Gracias,
**{{ config('app.name') }}**
@endcomponent

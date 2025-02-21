@component('mail::message')
# Nuevo mensaje de contacto

**Nombre:** {{ $nombre }}
**Empresa:** {{ $empresa }}
**Tipo de Empresa:** {{ $tipo_empresa }}
**Urgencia:** {{ $urgencia }}
**Servicio:** {{ $servicio }}
**Provincia:** {{ $provincia }}
**Localidad:** {{ $localidad }}
**Teléfono:** {{ $telefono }}
**Email:** {{ $email }}


Gracias,
{{ config('app.name') }}
@endcomponent

@component('mail::message')
Por favor active la tienda. Aquí están los detalles de la tienda.
Nombre de la tienda: {{ $shop->name }}
Dueño de la tienda: {{ $shop->owner->name }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Gracias,<br>
{{ config('app.name') }}
@endcomponent

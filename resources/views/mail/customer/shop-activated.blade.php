@component('mail::message')
Felicidades, tu tienda ya está ACTIVA

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

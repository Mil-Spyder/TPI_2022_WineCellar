@component('mail::message')
# Attention !!!

{{$data->appelation}} de {{$data->winemaker->domain_name}} approche la date limite.


@component('mail::button', ['url' => $url,'color'=>'error'])
Cliquer ici
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

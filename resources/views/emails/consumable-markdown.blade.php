@component('mail::message')
# Bonne Nouvelle

 {{$data->appelation}} de {{$data->winemaker->domain_name}} prête à être consommé


@component('mail::button', ['url' => $url,'color'=>'primary'])
Cliquer ici
@endcomponent

Remerciement,<br>
{{ config('app.name') }}
@endcomponent


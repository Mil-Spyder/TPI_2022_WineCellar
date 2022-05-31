@component('mail::message')
# Super Bonne Nouvelle !

{{$data->appelation}} de {{$data->winemaker->domain_name}} a atteint l'apogée.


@component('mail::button', ['url' => $url,'color'=>'success'])
Cliquer ici
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

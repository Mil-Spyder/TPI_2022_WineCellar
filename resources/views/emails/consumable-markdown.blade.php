@component('mail::message')
# Introduction

 Prête à être consommé

@component('mail::button', ['url' => $url,'color'=>'primary'])
Cliquer ici
@endcomponent

Remerciement,<br>
{{ config('app.name') }}
@endcomponent

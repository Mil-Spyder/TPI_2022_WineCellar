@component('mail::message')
# Introduction

let's go apogée

@component('mail::button', ['url' => $url,'color'=>'success'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

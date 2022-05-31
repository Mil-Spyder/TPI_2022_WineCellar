@component('mail::message')
# Introduction

Oh no danger

@component('mail::button', ['url' => $url,'color'=>'error'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

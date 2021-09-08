@component('mail::message')
# Introduction

Glad to have you on board

## For Further assistance
0720100000 or admin@admin.com

@component('mail::button', ['url' => '/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

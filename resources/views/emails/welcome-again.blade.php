@component('mail::message')
# Introduction

Thanks for registeration.

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
    This is new text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

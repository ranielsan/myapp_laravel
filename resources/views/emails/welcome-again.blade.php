@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
This is a test only.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

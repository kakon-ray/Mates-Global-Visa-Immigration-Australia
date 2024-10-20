@component('mail::message')
# Welcome to Global Connex

Thanks for your co-operations.

@component('mail::button', ['url' => 'http://globalconnex.com.au/'])
Visit us.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

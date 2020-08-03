@component('mail::message')
# A Header

The body of your message.

@component('mail::button', ['url' => 'https//www.facebook.com'])
Welcome to Laracast
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

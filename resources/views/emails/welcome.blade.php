@component('mail::message')
# kala billa

The body of your message.



@component('mail::button', ['url' => 'http://www.google.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
@component('mail::message')
# فعالسازی حساب کاربری

برای فعالسازی حساب کاربری خود کد زیر را کپی کنید

@component('mail::panel')
کد فعالسازی شما : {{$code}}
@endcomponent

با تشکر,<br>
{{ config('app.name') }}
@endcomponent

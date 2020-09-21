@component('mail::message')
# Merhaba,

**{{ now() }}** tarihinde abonelik formunu dolduran kişinin bilgileri şu şekildedir:


@if ($request->input('email'))
**Email:** {{ $request->input('email') }}
@endif

{{ config('app.name') }}
@endcomponent

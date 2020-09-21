@component('mail::message')
# Merhaba,

**{{ now() }}** tarihinde Hekime Sor formunu dolduran kişinin bilgileri şu şekildedir:

{{-- 
@if ($request->input('email'))
**Email:** {{ $request->input('email') }}
@endif

@if ($request->input('first_name') && $request->input('last_name'))
**Ad Soyad:** {{ $request->input('first_name') }} {{ $request->input('last_name') }}
@endif --}}

@if ($request->input('askToDoctor'))
**Soru:** {{ $request->input('askToDoctor') }}
@endif


{{ config('app.name') }}
@endcomponent

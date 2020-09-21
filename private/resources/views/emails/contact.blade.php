@component('mail::message')
# Merhaba,

**{{ now() }}** tarihinde iletişim formunu dolduran kişinin bilgileri şu şekildedir:


@if ($request->input('name'))
**Ad Soyad:** {{ $request->input('first_name') }} {{ $request->input('last_name') }}
@endif

@if ($request->input('email'))
**Email:** {{ $request->input('email') }}
@endif


@if ($request->input('phone'))
**Telefon:** {{ $request->input('phone') }}
@endif

@if ($request->input('institution'))
**Konu:** {{ $request->input('institution') }}
@endif

@if ($request->input('message'))
{{-- **Mesaj:** {!! strip_tags(nl2br($request->input('message')), '<br>') !!} --}}
**Mesaj:** {{ $request->input('message') }}
@endif

{{ config('app.name') }}
@endcomponent

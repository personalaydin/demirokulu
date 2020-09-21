@extends('admin.template.master')

@include('admin.template.components.datatable')

@section('content')

    @include('admin.template.components.buttons.page-index')

    @component('admin.template.partials.datatable')
        @slot('thead')
            <th>Ad Soyad</th>
            <th>E-Posta</th>
            <th>Tarih</th>
        @endslot

        @slot('tbody')
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->getFullName() }}</td>
                    <td>{{ $row->getEmail() }}</td>
                    <td>{{ $row->created_at }}</td>

                    @include('admin.template.partials.datatable-tbody', ['row' => $row])
                </tr>
            @endforeach
        @endslot
    @endcomponent

@endsection

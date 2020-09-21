@extends('web.template.layout', [
    'unsetBreadcrumbs' => true,
    'headerClass' => 'header--shrink'
])

@section('content')
    <div class="d-flex align-items-center justify-content-center min-height-755">
        <div class="text-center">
            <div class="error__number font-size-120 font-size-sm-150 text-main line-height-1 mb-2">404</div>
            <div class="text-blue-900 font-weight-600 mb-5 mb-lg-10">{!! theSentence('404-warning', false) !!}</div>
            {{-- <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="h-button h-button__error-page px-6 rounded-sm font-weight-600 font-size-14"></a> --}}
            
            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="pt-10 pb-10 pl-20 pr-20 mt-50 button button-fixed-mobile button-main--fill scale-8 font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 animate animate--fadeIn will-be-animate animated fadeInUp">
                {!! theSentence('404-home', false) !!} 
            </a>
        </div>
    </div>
@endsection
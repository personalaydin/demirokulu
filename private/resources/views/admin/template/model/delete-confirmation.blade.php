@extends('admin.template.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-trash font-purple"></i>
                        <span class="caption-subject font-purple">{{ $modelMeta->deleteTitle }} Çöpe Taşı</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="{{ route('admin.'.$modelMeta->name.'.destroy', $row) }}" method="post">
                        {{ method_field('DELETE') }}

                        <div class="form-body">
                            <h4 class="text-center">
                                <a class="font-purple" href="{{ $row->getEditLink() }}">
                                    <strong>"{{ $row->getTitle() }}"</strong>
                                </a>
                                <br><br>
                                Çöpe taşımak istediğinizden emin misiniz?
                                <br><br>
                                <small>
                                    Dilerseniz daha sonra bu öğeyi tekrar geri getirebilir veya <br> <a href="{{ route('admin.'.$modelMeta->name.'.trash') }}" class="font-purple"><strong>çöp kutusuna</strong></a> giderek kalıcı olarak silebirsiniz.
                                </small>
                            </h4>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn purple">Evet, Çöpe Taşı</button>
                                    @if (Route::has('admin.'.$modelMeta->name.'.edit'))
                                        <a class="btn grey-mint" href="{{ route('admin.'.$modelMeta->name.'.edit', $row) }}">Hayır, İçeriğe Dön</a>
                                    @elseif (Route::has('admin.'.$modelMeta->name.'.show'))
                                        <a class="btn grey-mint" href="{{ route('admin.'.$modelMeta->name.'.show', $row) }}">Hayır, İçeriğe Dön</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('company.admin_layout')

@section('title')Editar Un Servicio @stop
@section('titleHeader')Editar @stop

@section('content')
    @include('services.edit')
@stop



@section('script')
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!!Html::script('js/querys/servi.js')!!}
    {!! Html::script('js/querys/script-localidades.js') !!}
    {!! Html::script('js/querys/dinamico.js') !!}
    {!!Html::script('vendors/ckeditor/ckeditor.js')!!}
@stop
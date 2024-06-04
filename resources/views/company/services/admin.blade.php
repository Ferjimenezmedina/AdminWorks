@extends('company.admin_layout')

@section('title') Administración de Servicios @stop

@section('titleHeader')Mis Servicios @stop

@section('content')
    @include('services.admin')
@stop

@section('script')
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!! Html::script('js/querys/servi.js') !!}
@stop
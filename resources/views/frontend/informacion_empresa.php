@extends('layouts.principal')

@section('title')
	Pruguntas Frecuentes de Aspirante
@stop
@section('content')
<div class="card">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Test 1</a></li>
        <li class="tab"><a class="active" href="#test5">Test 2</a></li>
        <li class="tab"><a href="#test6">Test 3</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">Test 1</div>
      <div id="test5">Test 2</div>
      <div id="test6">Test 3</div>
    </div>
  </div>

@stop 
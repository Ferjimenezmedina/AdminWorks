@extends('aspirantes.admin_user')

@section('title') gMaps  @stop

@section('titleHeader')Mi Perfil  @stop 


@section('content')
        <script type='text/javascript'>var centreGot = false;</script>
        {!! $marker['map_js'] !!}
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <div class="panel panel-default">
 <div class="panel-heading">Home</div>
 
 <div class="panel-body">
 {!! $marker['map_html'] !!} 
 </div>
 </div>
 </div>
 </div>
</div>
@endsection
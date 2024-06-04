<section class="container">
    @extends('errors.mensaje')
    <div class="row">
        <h4>Administra tus servicios</h4>
        <div class="row complete">
            @if($services->isEmpty())
                <div class="col s12 card valign-wrapper valign blue">
                    <h5 class="valign center col s12 white-text">No se cuenta con servicios publicados</h5>
                </div>
            @else
            @foreach($services as $servi)
                <article id="myarti{{ $servi->id }}" class="col s12 m4">
                    <div class="card small">
                        <div class="card-image">
                            @if($servi->img_service)
                                <img src="{!! asset('cvs/dir'.$servi->user_id.'/'.$servi->img_service) !!} ">
                            @else
                                <img src="{{ asset('img/logo-repuesto.png') }}">
                            @endif
                            <span  class="card-title">{{ str_limit($servi->service, 10) }}</span>
                        </div>
                        <div class="card-content">
                            <p>{{ str_limit($servi->service, 15) }}</p>
                        </div>
                        <div class="card-action">
                            
                            <a href="{{ route('services.edit',$servi->id) }}"><i class="material-icons">create</i></a>
                             <a href="#" data-title-ser="{{ $servi->service }}" data-id="{{ $servi->id }}" class="deleteservice"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </article>
            @endforeach
            @endif
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div id="deletmodelservice" class="modal">
    <div class="modal-content red"> <!--  -->
        {!! Form::open(['route'=>['services.delete', ':CAT_ID'],'method'=>'DELETE' ,'id'=>'form-servi-delete']) !!}
        <input type="hidden" id="inputid">
        {!! Form::close() !!}
        <h4 class="white-text">Eliminar Servicio</h4>
        <p class="grey-text text-lighten-2">¿Está seguro que desea <strong>Eleminar</strong> el servicio? <br>
            <span id="id-servis-name"></span>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" id="btn-delete-servi" class="red white-text modal-action modal-close waves-effect btn-flat">Eliminar</a>
        <a href="#!" id="clsmodalservi" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>
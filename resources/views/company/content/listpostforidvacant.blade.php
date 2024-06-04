@extends('company.admin_layout')

@section('title') Aspirantes Postulados  @stop

@section('titleHeader')Aspirantes Postulados  @stop

@section('content')
    <section class="container">
        <div class="row card-panel">
            <h5 class="blue-text">Aspirantes postulados para la vacante </h5>
            <p>Tienes {{ $postions->count() }} postulados para esta vacante de un total de {{ $postions->total() }}.</p>
            @if($postions->isEmpty())
                <div class="col s12 card valign-wrapper valign-demo white">
                    <h5 class="valign center col s12 black-text">Aún no se cuentan con aspirantes para esta vacante.</h5>
                </div>
            @else
                @foreach($postions as $aspi)
                    <div class="col s12">
                        <div class="row ">
                            <div class="col s12">
                                <h5>{{ $aspi->title_prof }}</h5>
                            </div>
                            <div class="col s12 valign-wrapper caja-empleo">
                                <div class="col s1 hide-on-med-and-down l2 center valign">
                                    @if($aspi->photo)
                                        <img class="circle responsive-img" src="{!!asset('cvs/dir'.$aspi->user_id.'/'.$aspi->photo)!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                                    @else
                                        <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                                    @endif
                                </div>
                            <div class="col s9 m9 l8">
                                <h6><i class="material-icons ico-aling blue-text">stars</i> <strong>Especialidad:</strong> {{ $aspi->specialty }} </h6>
                                <div class="row">
                                    <div class="col s6">
                                        <p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">account_box</i> <strong>Nombre: </strong>{{ $aspi->full_name  }}</p>
                                        <p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">email</i> <strong>email: </strong>{{ $aspi->email }}</p>
                                    </div>
                                    <div class="col s6">
                                        <p class="rto-mono-medium"><i class="material-icons blue-text ico-aling">phone</i>{{ $aspi->telefono1 }}</p>
                                    </div>
                                </div>
                                <p class="justificado slab-r-regular" >Presentación.</p>
                                <p>{{ $aspi->descrip_prof }}</p>
                                <div class="col s12">
                                    <spam id="myspamcontbtnleaflet{{ $aspi->id_user }}" class="col s1 right">
                                        @if( ! currentUser()->company->hasUserLeaflet($aspi->id_user) )
                                                <button id="mybtnleaflet{{ $aspi->id_user }}" data-usid="{{ $aspi->id_user }}" class="btn-floating waves-effect waves-light black btn tooltipped agreeLeafletUs" data-position="top" data-delay="50" data-tooltip="Agregar a Prospectos">
                                                    <i class="material-icons">thumb_up</i>
                                                </button>
                                        @else
                                            <button id="mybtnleafletDel{{ $aspi->id_user }}" data-usiddel="{{ $aspi->id_user }}" type="submit" class="btn-floating waves-effect waves-light black btn tooltipped deleteLeafletUs" data-position="top" data-delay="50" data-tooltip="Eliminar de mis Prospectos">
                                                <i class="material-icons white-text">thumb_down</i>
                                            </button>
                                        @endif
                                    </spam>
                                    <spam class="col s1 right">
                                        <a href="#mod-detalle-prospect" data-idprosp="{{ $aspi->id_user }}" class="modal-trigger btn-floating waves-effect waves-light black btn btn-get-prospect"><i class="material-icons white-text">visibility</i></a>
                                    </spam>
                                </div>
                            </div>
                                <div class="col s4 m4 l2 card blue">
                                    <ul class="white-text text-darken-2" >
                                        <li><i class="material-icons ico-aling">location_on</i> {{ $aspi->nombre }}</li>
                                        <li><i class="material-icons ico-aling">event_note</i> {{ $aspi->birthdate->age }} años</li>
                                        <li><i class="material-icons ico-aling">people</i> {{ $aspi->estado_civil }}</li>
                                        <li><i class="material-icons ico-aling">attach_money</i> {{ $aspi->req_salary }}</li>
                                        <li><i class="material-icons ico-aling">flight_takeoff</i> Viajar: Si</li>
                                    </ul>
                                </div>
                            </div>
                        </div>{{--  --}}
                        <div class="divider"></div>
                </div>
                @endforeach
                <div class="row">
                    <p class="col s12  center">
                        {!! $postions->render() !!}
                    </p>
                </div>
            @endif
        </div>

    </section>
    <!-- Modal Structure -->
    <div id="mod-detalle-prospect" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div id="preloader-pros" class="valign-wrapper">
                <div class="valign center row">
                    <div class="preloader-wrapper big active center">
                        <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="boxprospect"></div>
        </div>
        <div class="modal-footer">
            <a href="#!" id="closeModelProspect" class=" modal-action modal-close waves-effect waves-blue btn-flat">Cerrar</a>
            <a href="#!" id="printProspect" target="_blank" class=" modal-action modal-close waves-effect waves-blue btn-flat">Imprimir</a>
        </div>
        
    </div>

    {!! Form::open(['route'=> ['leaflet.submit',':CAT_ID'], 'method' => 'POST', 'id'=>'formAgreeLeaflet']) !!}
    {!! Form::close() !!}
    {!! Form::open(['route'=> ['leaflet.delete', ':CAT_ID'], 'method' => 'DELETE', 'id' => 'formDeleteLeaflet']) !!}
    {!! Form::close() !!}
@stop

@section('script')
    {!! Html::script('js/querys/pluemplea2.js') !!}
    {!! Html::script('js/querys/leaflet.js') !!}
@stop



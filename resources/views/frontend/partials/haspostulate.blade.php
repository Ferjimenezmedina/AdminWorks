<div class="row">
    @if (! Auth::guest())
        @if(currentUser()->type  != 'company')
            @if(! currentUser()->hasPostulate($vacant))
                {!! Form::open(['route' =>['postulate.submit', 'id' => $vacant->id], 'method' => 'POST']) !!}
                <div class="col s12 center">
                    <p class="center-align">
                        <button type="submit" class="btn waves-effect waves-blue blue lighten-2 z-depth-2 btn-large">
                            Postularme <i class="material-icons right medium">playlist_add</i>
                        </button>
                    </p>
                </div>
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' =>['postulate.delete', $vacant->id], 'method' => 'DELETE']) !!}
                <div class="col s12 center">

                    <p class="center-align">
                        <button type="submit" class="btn waves-effect waves-blue blue lighten-2 z-depth-2 btn-large">
                            Quitar Postulación <i class="material-icons right medium">highlight_off</i>
                        </button>
                    </p>

                </div>
                {!! Form::close() !!}
            @endif
        @endif

    @else
        <div class="col s12 center">
            <p>
                <p align="center">"Necesitas estar registrado para postularte en la vacante"</p>
                <a href="{{ route('auth.register') }}" class="btn waves-effect waves-black black darken-2 z-depth-2 btn-large">
                    Registrarme <i class="material-icons right medium">account_circle</i>
                </a>
            </p>
        </div>
    @endif
</div>

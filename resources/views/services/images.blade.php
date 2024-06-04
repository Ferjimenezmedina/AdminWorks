<div class="row">
    @if($imags->isEmpty())
        <div class="col s12 card valign-wrapper valign blue">
            <h5 class="valign center col s12 white-text">No tienes imagenes.</h5>
        </div>
    @else
    <p>Cuentas con {{ $imags->total() }} imagenes.</p>
    @foreach($imags as $imag)
        <article data-id="{{ $imag->id }}" class="col s12 m6">
            <div class="card small">
                <div class="card-image">
                    <img src="{{ asset('/'.$imag->url) }}">
                </div>
                <div class="card-content">
                    <div class="col s12">
                        <p class="paragra-col"><strong>Url:</strong> {{ asset('/'.$imag->url) }}</p>
                    </div>
                </div>
                <div class="card-action">
                    <a class="red-text btn-imgdesc-del" href="#">Eliminar <i class="material-icons right">delete</i></a>
                </div>
            </div>
        </article>
    @endforeach
    <div class="col s12 ">
        {!! $imags->render() !!}
    </div>
    @endif
</div>
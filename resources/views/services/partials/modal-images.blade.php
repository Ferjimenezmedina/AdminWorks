<!-- Modal Structure -->
<div id="modal_img" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h4>Subir Imagen</h4>
                <p>En AdminWorks te damos espacio para que subas tus imagenes. </p>
                <ul class="collection">
                    <li class="collection-item">Sube tu imagen.</li>
                    <li class="collection-item">Copia la Url.</li>
                    <li class="collection-item">Pega en el recuadro de Url en insertar imagen.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            {!! Form::open(['route'=>'services.imgup','method'=>'POST','name'=>'unload_form','id'=>'unload_form','files' => true]) !!}
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn black">
                        <span class="white-text">Imagen</span>
                        <input name="myimg" id="myimg" type="file" required="required">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" id="rectext" type="text">
                    </div>
                    <div class="progress" id="progr_img">
                        <div class="determinate"></div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="hidden" id="messimgdes"></div>
                <div id="showupimg"></div>
            </div>
            <div class="input-field col s12  grey-text text-darken-2 ">
                <button class="btn  waves-effect waves-light right  blue rto-mono-regularo" type="submit" name="action">Subir <i class="material-icons right small">backup</i>
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" id="clsbtnmodal" class="waves-effect waves-blue btn-flat">Cerrar</a>
    </div>
</div>

<div id="imagenAdmdes" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Mis Imagenes</h4>
        <div id="contenImgDescrip" class="row">
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
                            <a  class="red-text btn-imgdesc-del" href="#">Eliminar <i class="material-icons right">delete</i></a>
                        </div>
                    </div>
                </article>
            @endforeach
            <div class="col s12 ">
                {!! $imags->render() !!}
            </div>
            @endif
        </div>

    </div>
    <div class="modal-footer">
        <a href="#!" id="clsbtnmodal2" class="waves-effect waves-black btn-flat">Cerrar</a>
    </div>
</div>
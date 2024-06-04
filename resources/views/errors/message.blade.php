@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="col s12">
        <strong>Whoops!</strong> Por favor corrige los siguientes errores:<br><br>
            @foreach ($errors->all() as $error)
                <div class="chip">{{ $error }}<i class="material-icons">close</i></div>
            @endforeach
    </div>
@endif
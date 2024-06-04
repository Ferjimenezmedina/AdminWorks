Tu Busqueda:
    @if($name_state)
            en <strong>"{{ $name_state->nombre }}"</strong>
    @endif
    @if($name_muni)
        , <strong>"{{ $name_muni->nombre }}"</strong>
    @endif
    @if($name_catego)
        de la Categoria <strong>"{{ $name_catego->category }}"</strong>
    @endif
    @if($name_subc)
        y de la subcategoría <strong>"{{ $name_subc->subcategory }}"</strong>
    @endif
    @if($min_salary)
        con un salario <strong>Entre ${{ number_format($min_salary) }}</strong>
    @endif
    @if($is_postulada)
        desde <strong>{{ $is_postulada }}</strong>
    @endif
 


    con un Resultado de <strong>"{{ $vacan->total() }} Empleos"</strong>.
<section class="full-content">
    @extends('errors.mensaje')
    @foreach($services as $servi)
        @if($servi->img_service)
            
        <div class="row">
            
						<div class="input-field col s12 m7  black-text text-darken-2"></br></br>
                                                                                                   
                        <label for="title">Titulo del servicio:<span class="red-text"></span></label>
                        {!! $servi->service !!}
							
						</div>

                        <div class="row">
						<div class="input-field col s12 m7  black-text text-darken-2"></br></br>
                        {!! $servi->description  !!}
                        </br><label for="title">Descripcion del servicio:<span class="red-text"></span></label>
						</div>

                        
                        <div class="input-field col s12 m7  black-text text-darken-2"></br>
                        
							<label for="title"><span class="red-text"></span></label>
						</div>
        @endif
        <div class="col s12" >
                <img class="responsive-img" src="{!! asset('cvs/dir'.$servi->user_id.'/'.$servi->img_service) !!}" alt="ImgService{{ $servi->id }}" align="right">
            </div>
            <div class="input-field col s12 m7  black-text text-darken-2"  align="right"></br>
                     <i class="material-icons ico-aling">work</i>ID del servicio: {!! $servi->id  !!}  
                       
                     </li>
                      <i class="material-icons ico-aling" align="left">timer</i>Alta del Servicio: {!! $servi->created_at->format('d-m-Y')  !!}
                      <i class="material-icons ico-aling" align="left">label</i>CA-ID: {!! $servi->category_id !!}
                      <i class="material-icons ico-aling" align="left">label</i>SBCA-ID: {!! $servi->subcategory_id !!}
                      <br>
                      <br>
						</div>
                        

           

    @endforeach
</section>


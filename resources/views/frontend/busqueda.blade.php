@extends('layouts.principal')

@section('title') Busqueda @stop 

@section('content')
<!-- Se determina y escribe la localizacion -->

<!-- Se determina y escribe la localizacion -->

<meta http-equiv="x-ua-compatible" content="IE=7,9,chrome=1" />
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

<meta charset="utf-8">


  <br>
  <div class="row">
    <div class="col s12 m8 offset-m1 card">
      <section class="fuente-small ">
        <h5 class="grey-text text-darken-4">Tu Busqueda</h5>
        <div class="row">
          {!! Form::model(Request::all(), ['route'=>'vacante.index', 'method'=>'GET','role'=>'search']) !!}
            @include('frontend.partials.form-busque-recive')
            <div class="row">
              <div class="input-field col s12 grey-text text-darken-2 right-align">
                <button class="btn waves-effect waves-light  blue rto-mono-regularo" type="submit" name="action"  onclick="findAddress()" onchange="findAddress()"  >Buscar Empleo
                </button>
              </div>
                                                    
            </div>
                                Tu Busqueda:
    @if($name_state)
            en <strong>"{{ $name_state->nombre }}"</strong>
    @endif
    @if($name_muni)
        , <strong>"{{   $name_muni->nombre }}"</strong>
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

          {!! Form::close() !!}
        </div>
      </section>
      <section>

        <p class="pbusqueda">
          @include('frontend.partials.parrafo-search')
        </p>

        <div class="divider"></div>
        @foreach($vacan as $vac)
        <div class="row valign-wrapper caja-empleo">
          <div class="col s1 hide-on-med-and-down l2 center valign">
            <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
          </div>
          <div class="col s9 m9 l8">
            <a href="{{ route('vacante.show', $vac->id) }}"><h5>{{ $vac->title }}</h5></a>
            <span class="rto-mono-medium"><i class="material-icons ico-aling tiny blue-text">label</i>{{ $vac->name_com }}</span>
            <p class="justificado slab-r-regular" >{{ $vac->description }}</p>
            <p class="right-align">
              <a href="{{ route('vacante.show', $vac->id) }}" class="btn-floating waves-effect waves-light black btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>

              <a href="#mapasin" onclick="initMap2()" class="btn-floating waves-effect waves-light black btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver en Mapa"><i class="material-icons">person_pin_circle</i></a>
              &nbsp; 




          </div>
          <div class="col s4 m4 l2 card blue n-4">
            <ul class="white-text text-darken-2" >
              <li><i class="material-icons ico-aling">location_on</i>{{ $vac->munpio }}</li>
              <li><i class="material-icons ico-aling">event_note</i>{{ $vac->created_at->format('d'). ' '.trans('empleados.dates.'.$vac->created_at->format('F')). ' '.$vac->created_at->format('Y') }}</li>
              <li><i class="material-icons ico-aling">library_books</i>{{ $vac->subcategory }}</li>
            <li><i class="material-icons ico-aling">attach_money</i>{{ number_format($vac->min_salary).' - '.number_format($vac->max_salary) }}</li>
            </ul>
          
            <ul class="white-text text-darken-2" >
              <li><i class="material-icons ico-aling">location_on</i>{{ $vac->munpio }}</li>
              <li><i class="material-icons ico-aling">event_note</i>{{ $vac->created_at->format('d'). ' '.trans('empleados.dates.'.$vac->created_at->format('F')). ' '.$vac->created_at->format('Y') }}</li>
              
            </ul>
          </div>

          <div class="col s4 m4 l2 card blue n-4">
            
          </div>


        </div>{{-- --}}
        <div class="divider"></div>
        @endforeach

        {!! $vacan->appends(Request::all())->render() !!}


      </section>





    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

       <center>
            <!-- AQUI INICIA MAPA DE UBICACION DE VACANTES VIA GMAPS -->
            <div style="overflow-y: auto; position: relative; " id="mapasin">
    <div class="col m2 hide-on-small-only ">
      <div class="relativo">
        <div class="row card caja-sinfix" style="width: 315px; height: 400px;" >
          <div class="col s12" align='center'>
          <!DOCTYPE html >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<head>

<meta charset="utf-8">
</script>
    <script type="text/javascript">
    


 


</script>

  </head>
  <body >  

<div id="TOPNAV">
  <div class="row">
  </div>  

<div id="map" style="width: 300px; height: 365px"></div>


<script>
      var customLabel = "";
    var map=null;
    var geocoder = null;

        function initMap2() {

       geocoder = new google.maps.Geocoder();
       var myOptions = {
                   zoom: 7,
                   center: new google.maps.LatLng(-23.3601431,-62.947625),
                   mapTypeControl: true,
                   mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                   navigationControl: true,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                };
       map = new google.maps.Map(document.getElementById("map"), myOptions);
        findAddress("Mexico");
        var infoWindow = new google.maps.InfoWindow;


          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/adminworks/resources/views/frontend/xmlmaps_especifico.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {  
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('title');
              var address = markerElem.getAttribute('specialty');
              var type = markerElem.getAttribute('description');


               var contentString = '<div id="content">'+name+'</br>'+type+'</br>'+'<a href="{{ route("vacante.show",  isset($vac->id) ? $vac->id :  "") }}" class="btn-floating waves-effect waves-light black btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>'+'</div>';
          
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

             map.setCenter(point);
             map.setZoom(15 );
            
             

              
        var infowindow = new google.maps.InfoWindow({ 
          content: contentString
          
        });
        function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                 draggable: true,
                animation: google.maps.Animation.DROP,
                color:green,
                map: map,
                position: point,
                label: icon.label

              });

            google.maps.event.addListener(marker, 'click', function() {
                map.setZoom(15);
                map.setCenter(marker.getPosition());
            });
            marker.addListener('click', toggleBounce);  

            google.maps.event.addListener(marker, 'dblclick', function() {
                map.setZoom(3);
                map.setCenter(marker.getPosition());
            });

           marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
            });
          });
 

       function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };
        

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    }
 
    </script>


    

<script>
      var customLabel = "";
    var map=null;
    var geocoder = null;

        function initMap() {

       geocoder = new google.maps.Geocoder();
       var myOptions = {
                   zoom: 3,
                   center: new google.maps.LatLng(23.9625079,-102.8028113),
                   mapTypeControl: true,
                   mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                   navigationControl: true,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                };
       map = new google.maps.Map(document.getElementById("map"), myOptions);
        findAddress("Mexico");
        var infoWindow = new google.maps.InfoWindow;


          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/adminworks/resources/views/frontend/xmlmaps.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {  
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('title');
              var address = markerElem.getAttribute('specialty');
              var type = markerElem.getAttribute('description');
                   
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

         
          
             var contentString = '<div id="content">'+name+'</br>'+type+'</br>'+'<a href="{{ route("vacante.show",  isset($vac->id) ? $vac->id :  "") }}" class="btn-floating waves-effect waves-light black btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>'+'</div>';
          

              
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                 draggable: true,
          animation: google.maps.Animation.DROP,  
                map: map,
                position: point,
                label: icon.label

              });

google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(15);
    map.setCenter(marker.getPosition());
});
marker.addListener('click', toggleBounce);

google.maps.event.addListener(marker, 'dblclick', function() {
    map.setZoom(3);
    map.setCenter(marker.getPosition());
});

           marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
            });
          });
      

       function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }0
        };
        

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    }


    function findAddress(address) {
           var municipio ="{{ isset($name_muni->nombre) ? $name_muni->nombre :  '' }}";

          if (municipio) {
            addressStr="{{ isset($name_muni->nombre) ? $name_muni->nombre :  '' }}"+",{{ isset($name_state->nombre) ? $name_state->nombre :  '' }}";
            
          }else{
            addressStr="{{ isset($name_state->nombre) ? $name_state->nombre :  'mexico' }}";

          }
          if (!address && (addressStr != '')) 
             address = addressStr;
    else 
             address = addressStr;
          if ((address != '') && geocoder) {
           geocoder.geocode( { 'address': address}, function(results, status) {
           if (status == google.maps.GeocoderStatus.OK) {
             if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
               if (results && results[0]
             && results[0].geometry && results[0].geometry.viewport) 
                 map.fitBounds(results[0].geometry.viewport);
             } else {
               alert("No results found");
             }
           } else {
            //alert("Geocode was not successful for the following reason: " + status);
           }
           });
          }
    }
 



        
    </script>

  </body>
</html>

<br>

<script type="text/javascript">
function general()
{
  myFunction();
  reload();
  FbotonOn();

}


 function reload() {
    document.getElementById('mapasin').src += '';
} vis_map.onclick = reload();


   function myFunction() {
    var x = document.getElementById("mapasin");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }


}
</script>
</html>
  </div>
  </div>
</body>

</head>
</div>


  <!-- AQUI TERMINA MAPA DE UBICACION DE VACANTES VIA GMAPS -->
        </div>
                            
      </div>
    </div>
    <button type="button" class="btn waves-effect waves-light  blue rto-mono-regularo" id="vis_map" onclick="general()">Ocultar mapa</button></center>
    <script type="text/javascript">
      var valor = true;
function FbotonOn() {
  var uno = document.getElementById('vis_map');
  valor?uno.innerText = "Ver mapa":uno.innerText = "Ocultar mapa";
  valor=!valor
}



    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzvVzGUVlGys9adYLodvky3sNDyyGVlk&libraries=places&callback=initMap">
    </script>
   

  </div>
  </div>
  
 
@stop

@section('script')
  {!! Html::script('js/querys/pluemplea2.js') !!}
  {!! Html::script('js/querys/script-localidades.js') !!}
@stop
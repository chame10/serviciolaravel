@extends('layouts.app')

@section('content')
<head>
            
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
           <script>
    $(document).ready(function() {
  var max_fields      = 5; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
    $(wrapper).append('<div> <select id="linea1" name="lines[]" >@foreach($linea as $linea)<option value="{{$linea['id']}}">{{$linea['nombreL']}}</option>@endforeach</select> <select id="actividad1" name="activities[]" >@foreach($actividad as $actividad)<option value="{{$actividad['id']}}">{{$actividad['nombreA']}}</option>@endforeach</select><select id="ubicacion1" name="locations[]" >@foreach($ubicaciones as $ubicaciones) <option value="{{$ubicaciones['id']}}">{{$ubicaciones['campus']}},{{$ubicaciones['nombreLo']}}</option> @endforeach</select><input id="date1" name="fecha[]" type="date" min="2018-10-18" value="2018-12-10"/><button  class="remove_field">x</button></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
  </script> 
           </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h3 >REGISTRA TUS ACTIVIDADES</h3>

                <div >
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <form method="POST" action="{{ url('registrar') }}" enctype="multipart/form-data" >
   <div class="cont-tabla">
      <div class="cont-fila">
        <div class="input_fields_wrap">
        <div class="cont-columna">
            <h5>Lineas de Acción</h5>
              
                  <select id="linea" name="lines[]" >
                    @foreach($lineas as $lineas)
                    <option value="{{$lineas->id}}">{{$lineas->nombreL}}</option>
                 @endforeach
                  </select>
              </div>
   <div class="cont-columna">
       <h5>Actividad</h5>
       
          <select id="actividad" name="activities[]" >
        @foreach($actividades as $actividades)
        <option value="{{$actividades->id}}">{{$actividades->nombreA}}</option>
       @endforeach
      </select>
    
    </div>
    
 <div class="cont-columna">
       <h5>Ubicación</h5>
          <select id="ubicacion" name="locations[]" >
        @foreach($ubicacion as $ubicacion)
        <option value="{{$ubicacion->id}}">{{$ubicacion->campus}},{{$ubicacion->nombreLo}}</option>
       @endforeach
      </select>
    </div>
    <div class="cont-columna">
   <h5>Fecha</h5>
<input id="date" name="fecha[]" type="date" min="2018-10-18" value="2018-12-10"/><button id="add_field_butto" class="add_field_button" >+</button>
</div>
</div>
    </div>
   </div>
 
 {{ csrf_field() }}
 <button  class="btn" type="submit">Registrar</button>
</form>
<a href="{{url('actividades')}}" >ver mis actividades</a>

                </div>
            
        </div>
    </div>
</div>
@endsection

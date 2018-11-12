
@extends('layouts.app')

@section('mievento')
<head>
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Mi evento</title>
    <link rel="stylesheet" href="{{asset('css/mievento.css')}}">
    <script>
    $(document).ready(function() {
  var max_fields      = 4; //maximum input boxes allowed
  var wrapper       = $(".input"); //Fields wrapper
  var add_button      = $(".add"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
    $(wrapper).append('<div>Tipo:<select name="Tparticipante[]" ><option value="estudiantes">Estudiantes</option><option value="estudiantes">Profesores</option><option value="estudiantes">Administrativos</option><option value="estudiantes">Público en general</option></select>Hombres:<input type="number" id="Pevento" min="1" name="Participantes[]" value="1" required="required">Mujeres:<input type="number" id="Pevento" min="1" name="Participantes1[]" value="1" required="required"><button class="remove_field">x</button></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
  </script>
</head>
<h4>Mi Evento</h4>
<h3>Por favor complete la siguiente información </h3>
  <form method="POST"  action="{{ url('actividades/actualizar/evento')}}" files="true" enctype="multipart/form-data">

    <label><input type="hidden" name="id" value="{{$eventos->id}}"></label>
    <label class="label label-primary" for="Fevento">Fecha</label>
    <input type="date" readonly  name="fecha" value="{{$eventos->fecha}}" /><br>
    <label class="label label-primary" for="Uevento">Ubicación</label>
    <input type="text" readonly id="ubicacion" name="ubicacion" value="{{$ubicacion->campus}},{{$ubicacion->nombreLo}}" /><br>
    <label class="label label-primary" for="Nevento">Evento:</label>
    <input   type="text" id="Nevento" name="nombre" placeholder="nombre del evento.."><br>
    <label class="label label-primary" for="Oeveto">Objetivo:</label><br>
    <textarea  id="Oeventi"  name="objetivo" rows="4" cols="50" maxlength="250" placeholder="Objetivo.."></textarea><br>

    <label class="label label-primary"  for="Jevento">Justificación:</label><br>
    <textarea  id="Jevento" name="justificacion" rows="5" cols="50" maxlength="250" placeholder="Justificación.."></textarea><br>

    <h4>Asistencia</h4>
    <div class="input">
    Tipo:<select name="Tparticipante[]" >
        <option value="estudiantes">Estudiantes</option>
        <option value="estudiantes">Profesores</option>
        <option value="estudiantes">Administrativos</option>
        <option value="estudiantes">Público en general</option>
    </select>
    Hombres:<input type="number" id="Pevento" min="1" name="Participantes[]" value="1" required="required">
    Mujeres:<input type="number" id="Pevento" min="1" name="Participantes1[]" value="1" required="required">
    <button id="add" class="add" >+</button>
</div>

    <p><label class="milabel" for="lista">
       Lista (PDF):<input type="file" name="listaA" accept="application/pdf" >
    </label></p>
 
    <p><label class="milabel" for="imagen">
       Evidencia(Foto):<input type="file" name="evidencia[]" id="evidencia[]" multiple="" accept="image/jpeg"  >
    </label></p>
  

   {{ csrf_field() }}
    <button  class="btn" type="submit">Registrar</button>
    
  </form>
 <a href="{{URL::previous()}}"><button type=""class="btn btn-primary ">Atrás</button></a>

@endsection

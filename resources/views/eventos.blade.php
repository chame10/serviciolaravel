
<head>

    <meta charset="utf-8">
    <title></title>
<style>
body {
  font-family: Arial;
 
width: 1024px; margin-left: 25%;
}
label{
    padding-top: : 8px;
}

input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
   display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number]{
    width: 10%;
    padding: 8px 15px;
    margin: 8px 0;

    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
input[type=date]{
     width: 20%;
    display: block;
    margin: 8px 0;
    
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
select{
    width: 15%;
}
#ubicacion{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
   display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn {
    width: 20%;
    background-color: #0B0B61;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #08088A;
}

div.container {
    border-radius: 5px;
    padding: 20px;
 
     
}
</style>
</head>

<h4>Mi Evento</h4>
<h3>Por favor complete la siguiente información </h3>

<div class="container">
  <form method="POST"  action="{{ url('completar/actividades') }}" enctype="multipart/form-data">
    <body>
    <label><input type="hidden" name="id" value="{{$eventos->id}}"></label>
    <label for="Fevento">Fecha</label>
    <input type="date" readonly name="fecha" value="{{$eventos->fecha}}" />
    <label for="Uevento">Ubicación</label>
    <input type="text" readonly id="ubicacion" name="ubicacion" value="{{$ubicacion->campus}},{{$ubicacion->nombreLo}}" />
    <label for="Nevento">Evento:</label>
    <input type="text" id="Nevento" name="nombre" placeholder="nombre del evento..">

    <label for="Oeveto">Objetivo:</label>
    <input type="text" id="Oevento" name="objetivo" placeholder="Objetivo..">

    <label for="Jevento">Justificación:</label>
    <input type="text" id="Jevento" name="justificacion" placeholder="Justificación..">

    <h4>Asistencia</h4>
    Tipo:<select name="Tparticipante" >
        <option value="estudiantes">Estudiantes</option>
        <option value="estudiantes">Profesores</option>
        <option value="estudiantes">Administrativos</option>
        <option value="estudiantes">Público en general</option>
    </select>
    Hombres:<input type="number" id="Pevento" min="1" name="Participantes" value="1" required="required">
    Mujeres:<input type="number" id="Pevento" min="1" name="Participantes1" value="1" required="required">

    <p><label for="lista">
       Lista (PDF):<input type="file" name="listaA" >
    </label></p>

    <p><label for="lista">
       Evidencia(Foto):<input type="file" name="Evidencia" >
    </label></p>

   {{ csrf_field() }}
    <button  class="btn" type="submit">Registrar</button>
    </body>
  </form>
</div>



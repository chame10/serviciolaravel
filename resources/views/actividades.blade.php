@extends('layouts.app')

@section('misactividades')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mis actividades</title>
	<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
</head>
<h3 >MIS  ACTIVIDADES</h3>
<form action="actividades_submit" method="get" accept-charset="utf-8">

<body>

<div class="tabla">
	@foreach($actividades as $actividades)
    <div class="fila">
        <div class="columna">
        	<div class="card">
   		<td>{{$actividades->nombreL}} </td>
   	    </div></div>
   	<div class="columna">
   		<div class="card">
   		<td>{{$actividades->nombreA}}</td>
   	</div></div>
	<div class="columna">
   		<div class="card">
   		<td>{{$actividades->campus}},{{$actividades->nombreLo}}</td>
   	</div></div>
   	<div class="columna">
   		<div class="card">
   		<td>{{$actividades->fecha}}</td>
   	</div></div>
   	<div class="columna">
      @if($actividades->nombre)
      <fieldset disabled>
 <a href="" oneclick="false" class="btn btn-success ">Completada</a>
      </fieldset>
      @else
     <a href="{{ url('actividades/completar', ['id' => $actividades->id]) }}" class="btn btn-danger">Completar</a>
     @endif
   	</div>
</div>
   	 @endforeach 
   </div>
		
</body>
</form>
 <a href="{{URL('home')}}"><button type=""class="btn btn-primary ">Atrás</button></a> 
@endsection
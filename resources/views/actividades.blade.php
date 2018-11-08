@extends('layouts.app')

@section('content')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mis actividades</title>
	<link rel="stylesheet" href="css/tabla.css">
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
   		<div class="completar">
   				<a   href="{{url("/miactividad/{$actividades->id}")}}">Completar</a>
   			</div>
   	</div>
</div>
   	 @endforeach 
   </div>
		
</body>
</form>
@endsection
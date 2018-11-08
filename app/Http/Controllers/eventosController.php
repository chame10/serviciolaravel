<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\event;

class eventosController extends Controller
{
    public function updateEvent($id){
    	$eventos=DB::table('events')->find($id);
    	$ubicacion=DB::table('locations')->find($eventos->id_locations);
		return view('eventos',compact('eventos','ubicacion'));
    }


    public function update(Request $Request){
   
    if($Request->hasfile('listaA')){
    $lista=$Request->file('listaA')->store('public');
    $evento=event::find($Request->id);
    $evento->nombre=$Request->nombre;
    $evento->objetivo=$Request->objetivo;
    $evento->justificacion=$Request->justificacion;
    $evento->lista=$lista;
    $evento->save();
  }

  $archi=DB::TABLE('events')->get();
   return view('archivo',compact('archi'));
  }
}

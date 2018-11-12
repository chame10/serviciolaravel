<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\event;
use App\file;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Redirect;

class eventosController extends Controller
{
    public function updateEvent($id){
    	$eventos=DB::table('events')->find($id);
    	$ubicacion=DB::table('locations')->find($eventos->id_locations);
		return view('eventos',compact('eventos','ubicacion'));
    }


    public function update(Request $Request){
    
    	
      if($Request->hasfile('listaA')){
    $path = $Request->file('listaA')->storeAs( 'public/listapdf',$Request->listaA->getClientOriginalName()); 
     $evento=event::find($Request->id);
     $evento->nombre=$Request->nombre;
     $evento->objetivo=$Request->objetivo;
     $evento->justificacion=$Request->justificacion;
     $evento->lista=$path;
      $evento->save();

       $foto= $Request->evidencia;
       if($foto)
       {
      // recorremos cada archivo y lo subimos individualmente
        for($i=0;$i<count($foto);$i++) {
          if($Request->hasfile('evidencia')){
      $path=Request()->evidencia[$i]->storeAs('public/fotos', Request()->evidencia[$i]->getClientOriginalName());
      $imagen=new file;
      $imagen->link=$path;
      $imagen->id_events=$Request->id;
      $imagen->save();
        }
  }
}
  }

   
    	
        return Redirect::to('actividades/ver');
  }
}

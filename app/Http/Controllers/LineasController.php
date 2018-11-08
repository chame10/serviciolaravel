<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\event;

use Illuminate\Support\Facades\Redirect;


class LineasController extends Controller
{
    //
    public function addevent(Request $request){
         $total=$request->locations;
         
    	
    	for($i = 0; $i < count($request->locations); $i++){
    		$evento=new event;
    	$evento->nombre='Nombre del evento';
    	$evento->fecha=$request->fecha[$i];
    	$evento->id_locations=$request->locations[$i];
    	$evento->id_user=Auth()->id();
    	$evento->id_lines=$request->lines[$i];
    	$evento->id_activities=$request->activities[$i];
        $evento->save();
         }
          
         return Redirect::to('home');
    	}


}

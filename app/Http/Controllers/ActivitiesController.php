<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\file;

class ActivitiesController extends Controller
{
    public function showActivities(){

   $actividades=DB::table('events')
   ->join('users','events.id_user','=','users.id')
  ->join('lines','events.id_lines','=','lines.id')
  ->join('activities','events.id_activities','=','activities.id')
  ->join('locations','events.id_locations','=','locations.id')
  ->select('lines.nombreL','activities.nombreA','locations.campus','locations.nombreLo','events.*')
  ->where('events.id_user','=',Auth()->id())
  ->get();
//dd($actividades);
return view('actividades',compact('actividades'));
	}

  
}

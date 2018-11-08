<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\location;
use App\activity;
use App\line;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas=DB::table('lines')->get();
        $linea=line::all()->toArray();
        $ubicaciones=location::all()->toArray();
        $ubicacion=DB::table('locations')->get();
        $actividades=DB::table('activities')->get();
        $actividad=activity::all()->toArray();
       
        return view('home',compact('lineas','linea','ubicaciones','ubicacion','actividades','actividad'));
    }


    
}

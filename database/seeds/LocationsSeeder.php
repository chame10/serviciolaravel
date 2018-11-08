<?php

use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Facultad de Lenguas'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Facultad de Ingeniería'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Facultad de Contaduria y Administración'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Facultad de Arquitectura'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Facultad de Ciencias en Física y Matemáticas'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Centro de Estudios para el Arte y la Cultura'],
        ['campus'=>'CAMPUS I TUXTLA',
        'nombreLo'=>'Escuela de Ciencias Químicas '],
        ['campus'=>'CAMPUS II TUXTLA',
        'nombreLo'=>'Facultad de Medicina, Veterinaria y Zootécnica'],
        ['campus'=>'CAMPUS II TUXTLA',
        'nombreLo'=>'Facultad de Medicina Humana'],
        ['campus'=>'CAMPUS III SAN CRISTÓBAL DE LAS CASAS',
        'nombreLo'=>'Escuela de Lenguas'],
        ['campus'=>'CAMPUS III SAN CRISTÓBAL DE LAS CASAS',
        'nombreLo'=>'Facultad de Derecho'],
        ['campus'=>'CAMPUS III SAN CRISTÓBAL DE LAS CASAS',
        'nombreLo'=>'Escuela de Gestión y Autodesarrollo Indigena'],
        ['campus'=>'CAMPUS III SAN CRISTÓBAL DE LAS CASAS',
        'nombreLo'=>'Facultad de Ciencias Sociales'],
         ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Facultad de Ciencias Químicas'],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Facultad de Negocios'],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Escuela de Lenguas '],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Facultad de Ciencias de la Admiistración'],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Instituto de Biociencias '],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Facultad de Ciencias Agricolas'],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Escuela de Humanidades '],
        ['campus'=>'CAMPUS IV TAPACHULA',
        'nombreLo'=>'Escuela de Medicina Humana'],
        ['campus'=>'CAMPUS V VILLAFLORES',
        'nombreLo'=>'Facultad de Ciencias Agronómicas'],
         ['campus'=>'CAMPUS VI TUXTLA',
        'nombreLo'=>'Facultad de Humanidades'],
        ['campus'=>'CAMPUS VII PICHUCALCO',
        'nombreLo'=>'Escuela de Contaduria y Administración'],
        ['campus'=>'CAMPUS VIII COMITÁN',
        'nombreLo'=>'Facultad de Ciencias Administrativas'],
      ]);
    }
}

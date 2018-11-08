<?php

use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
        ['nombreA'=>'cine-debate'],
        ['nombreA'=>'Foro'],
        ['nombreA'=>'curso-taller'],
        ['nombreA'=>'Conferencia'],
        ['nombreA'=>'Módulos de Información'],
        ['nombreA'=>'Congreso'],
        ['nombreA'=>'Seminario'],
        ['nombreA'=>'platica'],
      ]);
    }
}

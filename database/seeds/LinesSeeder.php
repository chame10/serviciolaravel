<?php

use Illuminate\Database\Seeder;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('lines')->insert([
         [  'nombreL'=>'Capacitación en perspectiva de genero'],
         ['nombreL'=>'Prevención de la Violencia'],
        ['nombreL'=>'Derechos Humanos'],
        ['nombreL'=>'Inclusión Social'],
         ['nombreL'=>'Derechos Sexuales y Reproductivos'],
        ]);
    }
}

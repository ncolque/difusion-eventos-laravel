<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'nombre'    =>  'Concierto Fonseca',
                'fecha'     =>  '2023-02-06',
                'hora'      =>  '19:30',
                'estado'    =>  'Habilitado',
                'user_id'   =>  '1',
            ],
            [
                'nombre'    =>  'Concierto Luis Fonsi',
                'fecha'     =>  '2023-03-12',
                'hora'      =>  '19:30',
                'estado'    =>  'Habilitado',
                'user_id'   =>  '1',
            ],
            [
                'nombre'    =>  'Concierto Don Omar',
                'fecha'     =>  '2023-04-22',
                'hora'      =>  '19:30',
                'estado'    =>  'Habilitado',
                'user_id'   =>  '1',
            ]
        ]);
    }
}

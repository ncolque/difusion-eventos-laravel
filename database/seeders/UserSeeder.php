<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'apellido' => 'Principal',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'tipo' => '1',
        ]);

        /* DB::table('users')->insert(
            [
            'name' => 'Gino',
            'apellido' => 'Barroso Viruez',
            'email' => 'gino@gmail.com',
            'password' => Hash::make('123'),
            'tipo' => '2',
            ]
        ); */
    }
}

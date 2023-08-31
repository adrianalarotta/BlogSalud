<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
               'nombres' => 'Juan',
                'apellidos' => 'Pérez',
                'password' => bcrypt('contraseña1'),
                'telefonos' => '123-456-7890',
                'fecha_nacimiento' => '1990-01-15',
                'email' => 'juan@example.com',
                'user_type' => 'admin',
            ],
          
            [
                'nombres' => 'ABC',
                'apellidos' => 'k',
                'password' => bcrypt('contraseña5'),
                'telefonos' => '789-012-3456',
                'fecha_nacimiento' => '2000-01-15',
                'email' => 'contacto@empresa.com',
                'user_type' => 'user',
            ],
        ]);
    }
}

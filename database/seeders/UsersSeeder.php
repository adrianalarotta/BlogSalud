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
                'tipo_documento' => 'Cédula de Ciudadanía',
                'numero_documento' => '123456789',
                'nombres' => 'Juan',
                'apellidos' => 'Pérez',
                'estado' => 1,
                'password' => bcrypt('contraseña1'),
                'observacion' => 'Usuario activo',
                'direccion' => 'Calle 123, Ciudad',
                'telefonos' => '123-456-7890',
                'fecha_nacimiento' => '1990-01-15',
                'email' => 'juan@example.com',
                'genero' => 'Masculino',
            ],
            [
                'tipo_documento' => 'Tarjeta de Identidad',
                'numero_documento' => '987654321',
                'nombres' => 'María',
                'apellidos' => 'Gómez',
                'estado' => 2,
                'password' => bcrypt('contraseña2'),
                'observacion' => 'Usuario inactivo',
                'direccion' => 'Avenida 456, Otra Ciudad',
                'telefonos' => '987-654-3210',
                'fecha_nacimiento' => '1992-05-20',
                'email' => 'maria@example.com',
                'genero' => 'Femenino',
            ],
            [
                'tipo_documento' => 'Pasaporte',
                'numero_documento' => 'AB123456',
                'nombres' => 'Luis',
                'apellidos' => 'Hernández',
                'estado' => 3,
                'password' => bcrypt('contraseña3'),
                'observacion' => 'Usuario pendiente de verificación',
                'direccion' => 'Carrera 789, Otra Ciudad',
                'telefonos' => '789-123-4567',
                'fecha_nacimiento' => '1988-10-02',
                'email' => 'luis@example.com',
                'genero' => 'Masculino',
            ],
            [
                'tipo_documento' => 'Cédula de Extranjería',
                'numero_documento' => 'X12345678',
                'nombres' => 'Elena',
                'apellidos' => 'López',
                'estado' => 4,
                'password' => bcrypt('contraseña4'),
                'observacion' => 'Usuario en proceso de registro',
                'direccion' => 'Barrio 789, Otra Ciudad',
                'telefonos' => '456-789-0123',
                'fecha_nacimiento' => '1995-03-12',
                'email' => 'elena@example.com',
                'genero' => 'Femenino',
            ],
            [
                'tipo_documento' => 'NIT',
                'numero_documento' => '900123456',
                'nombres' => 'ABC',
                'apellidos' => 'k',
                'estado' => 5,
                'password' => bcrypt('contraseña5'),
                'observacion' => 'Empresa registrada',
                'direccion' => 'Oficina 123, Otra Ciudad',
                'telefonos' => '789-012-3456',
                'fecha_nacimiento' => null,
                'email' => 'contacto@empresa.com',
                'genero' => 'Femenino',
            ],
        ]);
    }
}

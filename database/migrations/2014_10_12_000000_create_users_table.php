<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_documento', ['Cédula de Ciudadanía', 'Tarjeta de Identidad' ,'Pasaporte', 'Cédula de Extranjería','NIT']);
            $table->string('numero_documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->tinyInteger('estado');
            $table->string('password');
            $table->string('observacion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefonos')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email');
            $table->enum('genero', ['Femenino', 'Masculino']);
            $table->string('token')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

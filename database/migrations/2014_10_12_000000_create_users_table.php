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
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('password');
            $table->string('telefonos')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email');
            $table->string('user_type')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

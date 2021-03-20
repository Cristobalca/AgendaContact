<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre', 80);
            $table->string('Apellido', 100)->nullable();
            $table->string('Sexo');
            $table->string('Telefono')->unique();
            $table->string('Correo')->unique();
            $table->string('Casado')->nullable();
            $table->date('FechaNacimiento');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}

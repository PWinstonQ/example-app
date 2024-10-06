<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id(); // Campo de clave primaria
            $table->string('nombre'); // Nombre del contacto
            $table->string('email'); // Email del contacto
            $table->text('mensaje'); // Mensaje del contacto
            $table->boolean('publicidad')->default(false); // Publicidad (booleano)
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact');
    }
}

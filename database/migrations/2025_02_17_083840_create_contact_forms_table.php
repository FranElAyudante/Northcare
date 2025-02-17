<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_empresa');
            $table->string('urgencia');
            $table->string('servicio');
            $table->string('empresa')->nullable();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('provincia');
            $table->string('localidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
};

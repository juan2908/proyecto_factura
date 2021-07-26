<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name',10);
            $table->string('last_name',20);
            $table->enum('ID_Type',['C.C','C.E']);
            $table->string('identification_number',20);
            $table->string('email',20);
            $table->string('phone',10);
            $table->string('password',10);
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
        Schema::dropIfExists('usuarios_tables');
    }
}

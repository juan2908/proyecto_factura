<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_invoices',20);
            $table->dateTime('Date_and_Time');
            $table->string('name_users',20);
            $table->string('nit',20);
            $table->string('name_buyer',20);
            $table->string('nit_buyer',20);
            $table->string('amount',20);
            $table->string('unit_value',20);
            $table->string('description',50);
            $table->string('total_value',20);
            $table->string('value_without_iva',20);
            $table->string('iva',20);
            $table->string('amount_to_be_paid',20);
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
        Schema::dropIfExists('facturas');
    }
}

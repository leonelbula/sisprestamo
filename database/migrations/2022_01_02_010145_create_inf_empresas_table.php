<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nit',15);
            $table->string('name',45);
            $table->string('direction');
            $table->string('town',45);
            $table->string('Department',45);
            $table->string('phone',20);
            $table->string('email',45);
            $table->string('owner',45);
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
        Schema::dropIfExists('inf_empresas');
    }
}

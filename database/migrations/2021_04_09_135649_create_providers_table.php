<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Provider', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('User')->onDelete('cascade');
            $table->string('name');
            $table->string('rfc');
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
        Schema::dropIfExists('Provider');
    }
}

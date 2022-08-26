<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_artist', function (Blueprint $table) {
            $table->increments('id_artist', 10);
            $table->string('name_artist', 100);
            $table->string('pf_artist', 100);
            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('table_category');
            $table->unsignedInteger('id_country');
            $table->foreign('id_country')->references('id_country')->on('table_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_artist');
    }
};

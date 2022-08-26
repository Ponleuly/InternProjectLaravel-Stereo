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
        Schema::create('table_track', function (Blueprint $table) {
            $table->increments('id_track', 10);
            $table->string('name_track', 100);
            $table->string('pf_track', 100);
            $table->text('audio_track');

            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('table_category');

            $table->unsignedInteger('id_country');
            $table->foreign('id_country')->references('id_country')->on('table_country');

            $table->unsignedInteger('id_artist');
            $table->foreign('id_artist')->references('id_artist')->on('table_artist');

            $table->unsignedInteger('id_album');
            $table->foreign('id_album')->references('id_album')->on('table_album');

            $table->unsignedInteger('id_playlist')->nullable();
            $table->foreign('id_playlist')->references('id_playlist')->on('table_playlist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_track');
    }
};

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
            $table->increments('id');
            $table->string('name_track', 100);
            $table->string('pf_track', 100);
            $table->text('audio_track');

            $table->unsignedInteger('id_category');
            $table->foreign('id_category')
                ->references('id')
                ->on('table_category')
                ->onDelete('cascade')
                ->onUpdate('cascade');;

            $table->unsignedInteger('id_artist');
            $table->foreign('id_artist')
                ->references('id')
                ->on('table_artist')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('id_album');
            $table->foreign('id_album')
                ->references('id')
                ->on('table_album')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('id_country');
            $table->foreign('id_country')
                ->references('id')
                ->on('table_country');

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
        Schema::dropIfExists('table_track');
    }
};

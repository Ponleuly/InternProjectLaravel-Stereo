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
        Schema::create('table_playlist_track', function (Blueprint $table) {
            $table->unsignedInteger('id_playlist');
            $table->foreign('id_playlist')
                ->references('id')
                ->on('table_playlist')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('id_track');
            $table->foreign('id_track')
                ->references('id')
                ->on('table_track')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('table_playlist_track');
    }
};

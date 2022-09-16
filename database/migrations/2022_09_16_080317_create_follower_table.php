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
        Schema::create('table_follower', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users');

            $table->unsignedInteger('id_artist');
            $table->foreign('id_artist')
                ->references('id')
                ->on('table_artist')
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
        Schema::dropIfExists('table_follower');
    }
};

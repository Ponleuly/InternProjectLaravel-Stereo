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
        Schema::create('table_playlist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_playlist', 100);
            $table->string('pf_playlist', 100)->nullable();

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('table_user');

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
        Schema::dropIfExists('table_playlist');
    }
};

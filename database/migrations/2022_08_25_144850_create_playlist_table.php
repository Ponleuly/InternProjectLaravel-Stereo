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
            $table->increments('id_playlist', 10);
            $table->string('name_playlist', 100);
            $table->string('pf_playlist', 100)->nullable();

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('table_user');
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

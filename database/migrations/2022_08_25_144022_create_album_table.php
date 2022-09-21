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
        Schema::create('table_album', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_album', 100);
            $table->string('pf_album', 100);

            $table->unsignedInteger('id_artist');
            $table->foreign('id_artist')
                ->references('id')
                ->on('table_artist')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('id_category');
            $table->foreign('id_category')
                ->references('id')
                ->on('table_category')
                ->onDelete('cascade')
                ->onUpdate('cascade');;

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
        Schema::dropIfExists('table_album');
    }
};

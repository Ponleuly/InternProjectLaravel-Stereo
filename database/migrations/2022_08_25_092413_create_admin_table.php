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
    {   /*
        Schema::create('table_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('pf_admin', 100)->nullable();
            $table->timestamps();
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_admin');
    }
};

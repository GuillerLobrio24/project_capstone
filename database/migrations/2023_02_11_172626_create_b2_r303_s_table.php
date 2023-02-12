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
        Schema::create('b2_r303_s', function (Blueprint $table) {
            $table->id();
            $table->string('b2r303subject');
            $table->string('b2r303professor');
            $table->decimal('b2r303schedulefrom');
	        $table->decimal('b2r303scheduleto');
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
        Schema::dropIfExists('b2_r303_s');
    }
};

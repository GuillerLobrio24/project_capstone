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
        Schema::create('b2_r401_s', function (Blueprint $table) {
            $table->id();
            $table->string('b2r401subject');
            $table->string('b2r401professor');
            $table->decimal('b2r401schedulefrom');
	        $table->decimal('b2r401scheduleto');
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
        Schema::dropIfExists('b2_r401_s');
    }
};

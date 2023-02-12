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
        Schema::create('b1_r303_s', function (Blueprint $table) {
            $table->id();
            $table->string('b1r303subject');
            $table->string('b1r303professor');
            $table->decimal('b1r303schedulefrom');
	        $table->decimal('b1r303scheduleto');
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
        Schema::dropIfExists('b1_r303_s');
    }
};

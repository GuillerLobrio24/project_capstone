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
        Schema::create('b1_r401_s', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('professor');
            $table->decimal('schedulefrom');
	        $table->decimal('scheduleto');
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
        Schema::dropIfExists('b1_r401_s');
    }
};

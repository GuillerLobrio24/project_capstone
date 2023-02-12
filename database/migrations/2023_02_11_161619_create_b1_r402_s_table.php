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
        Schema::create('b1_r402_s', function (Blueprint $table) {
            $table->id();
            $table->string('b1r402subject');
            $table->string('b1r402professor');
            $table->decimal('b1r402schedulefrom');
	        $table->decimal('b1r402scheduleto');
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
        Schema::dropIfExists('b1_r402_s');
    }
};

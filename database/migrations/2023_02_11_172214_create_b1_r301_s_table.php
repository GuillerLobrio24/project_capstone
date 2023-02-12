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
        Schema::create('b1_r301_s', function (Blueprint $table) {
            $table->id();
            $table->string('b1r301subject');
            $table->string('b1r301professor');
            $table->decimal('b1r301schedulefrom');
	        $table->decimal('b1r301scheduleto');
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
        Schema::dropIfExists('b1_r301_s');
    }
};

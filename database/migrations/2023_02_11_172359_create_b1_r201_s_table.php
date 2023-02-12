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
        Schema::create('b1_r201_s', function (Blueprint $table) {
            $table->id();
            $table->string('b1r201subject');
            $table->string('b1r201professor');
            $table->decimal('b1r201schedulefrom');
	        $table->decimal('b1r201scheduleto');
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
        Schema::dropIfExists('b1_r201_s');
    }
};

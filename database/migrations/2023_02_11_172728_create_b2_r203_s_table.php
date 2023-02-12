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
        Schema::create('b2_r203_s', function (Blueprint $table) {
            $table->id();
            $table->string('b2r203subject');
            $table->string('b2r203professor');
            $table->decimal('b2r203schedulefrom');
	        $table->decimal('b2r203scheduleto');
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
        Schema::dropIfExists('b2_r203_s');
    }
};

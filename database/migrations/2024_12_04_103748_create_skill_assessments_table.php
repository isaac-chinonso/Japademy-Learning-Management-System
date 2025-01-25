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
        Schema::create('skill_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('option5')->nullable();
            $table->integer('scorepoint1')->default(0)->nullable(); // Default to 0
            $table->integer('scorepoint2')->default(0)->nullable(); // Default to 0
            $table->integer('scorepoint3')->default(0)->nullable(); // Default to 0
            $table->integer('scorepoint4')->default(0)->nullable(); // Default to 0
            $table->integer('scorepoint5')->default(0)->nullable(); // Default to 0
            $table->boolean('status');
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
        Schema::dropIfExists('skill_assessments');
    }
};

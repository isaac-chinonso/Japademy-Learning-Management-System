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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('whatsappnum');
            $table->string('country_of_residence');
            $table->string('highest_education');
            $table->string('current_profession');
            $table->string('professional_experience');
            $table->string('specialty');
            $table->text('motivation')->nullable();
            $table->text('tech_skills_impact')->nullable();
            $table->text('career_goals')->nullable();
            $table->text('scholarship_reason')->nullable();
            $table->string('idcard')->nullable();
            $table->string('resume')->nullable();
            $table->string('education_verification')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
};

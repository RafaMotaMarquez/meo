<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('funder_id');
            $table->string('enrollment_type');
            $table->string('title');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->decimal('price');
            $table->string('course_language');
            $table->string('course_level');
            $table->decimal('course_duration');
            $table->text('course_quote')->nullable();
            $table->text('course_contract')->nullable();
            $table->text('course_agreement')->nullable();
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
        Schema::dropIfExists('enrollments');
    }
}

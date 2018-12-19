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
            $table->string('title');
            $table->text('body');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->decimal('price');
            $table->string('funding_body');
            $table->string('course_language');
            $table->string('course_level');
            $table->decimal('course_duration');
            // $table->unsignedInteger('attendance_id');
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

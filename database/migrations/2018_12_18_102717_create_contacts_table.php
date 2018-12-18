<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_type');
            $table->datetime('meeting_date');
            $table->string('photo')->default();
            $table->boolean('gender');
            $table->string('last_name')->default();
            $table->string('first_name');
            $table->string('email')->unique();
            $table->text('address');
            $table->text('postcode');
            $table->text('city');
            $table->text('country');
            $table->text('contact_note')->nullable();
            $table->boolean('join_newsletter');
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
        Schema::dropIfExists('contacts');
    }
}

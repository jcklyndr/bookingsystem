<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->string('name');  // 'name' column
            $table->string('email');  // 'email' column
            $table->string('contact');  // 'contact' column
            $table->string('subject');  // 'subject' column
            $table->text('message');  // 'message' column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactus');
    }
};


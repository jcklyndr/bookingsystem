<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomspaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomspa', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->string('name');  // 'name' column
            $table->string('image')->nullable();  // 'image' column (nullable)
            $table->integer('maxpeeps');  // 'maxpeeps' column
            $table->string('spaservice');  // 'spaservice' column
            $table->string('view');  // 'view' column
            $table->string('bed');  // 'bed' column
            $table->decimal('price', 8, 2);  // 'price' column
            $table->string('currency_code');  // 'currency_code' column
            $table->unsignedBigInteger('branch_id');  // Foreign key to 'branches'
            $table->timestamps();  // 'created_at' and 'updated_at' columns

            // Foreign key constraint
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roomspa');
    }
};


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();  // Creates an auto-incrementing 'id' column
            $table->string('name');  // 'name' column
            $table->string('image')->nullable();  // 'image' column (nullable)
            $table->text('description')->nullable();  // 'description' column (nullable)
            $table->string('location');  // 'location' column
            $table->timestamps();  // Automatically adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
};


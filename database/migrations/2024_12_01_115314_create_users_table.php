<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // 'id' column
            $table->string('name');  // 'name' column
            $table->string('email')->unique();  // 'email' column (unique)
            $table->string('password');  // 'password' column
            $table->rememberToken();  // 'remember_token' column for user sessions
            $table->timestamps();  // 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}


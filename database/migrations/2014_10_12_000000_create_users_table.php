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
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->unique();
            $table->string('en_first_name');
            $table->string('ar_first_name');
            $table->string('en_last_name');
            $table->string('ar_last_name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable()->default('default.jpg');
            $table->integer('en_gender');
            $table->integer('ar_gender');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('users');
   }
}
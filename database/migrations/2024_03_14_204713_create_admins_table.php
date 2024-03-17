<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->nullable()->default('default.jpg');
            $table->integer('phone')->unique();
            $table->string('en_first_name');
            $table->string('en_last_name');
            $table->string('ar_first_name');
            $table->string('ar_last_name');
            $table->string('en_type')->default('admin');
            $table->string('ar_type')->default('مسؤل');
            $table->integer('status')->default(1);
            $table->integer('en_gender');
            $table->integer('ar_gender');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};

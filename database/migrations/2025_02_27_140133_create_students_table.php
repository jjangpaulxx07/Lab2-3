<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('email', 45)->unique();
            $table->string('password', 255); // Store hashed password
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->date('date_of_join');
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15);
            $table->boolean('status');
            $table->date('last_login_date')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->timestamps();

            // Foreign key - parent_id must match the column type in 'parents'
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('parent_id')->on('parents')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('students');
    }
};
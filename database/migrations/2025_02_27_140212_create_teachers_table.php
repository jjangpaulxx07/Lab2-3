<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('email', 45)->unique();
            $table->string('password', 255);
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15);
            $table->boolean('status');
            $table->date('last_login_date')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('teachers');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id('classroom_id');
            $table->year('year');
            $table->unsignedBigInteger('grade_id');
            $table->char('section', 2);
            $table->boolean('status');
            $table->string('remarks', 45)->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();

            $table->foreign('grade_id')->references('grade_id')->on('grades');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
        });
    }

    public function down() {
        Schema::dropIfExists('classrooms');
    }
};
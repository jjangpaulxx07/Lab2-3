<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('exam_results')) {
            Schema::create('exam_results', function (Blueprint $table) {
                $table->unsignedBigInteger('exam_id');
                $table->unsignedBigInteger('student_id');
                $table->unsignedBigInteger('course_id');
                $table->string('marks', 45);
                $table->timestamps();

                // Foreign Keys
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
                $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('exam_results');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('classrooms')) {
            Schema::create('classrooms', function (Blueprint $table) {
                $table->id();
                $table->year('year');
                $table->bigInteger('grade_id')->unsigned();
                $table->char('section', 1);
                $table->tinyInteger('status')->default(1);
                $table->string('remarks', 45)->nullable();
                $table->bigInteger('teacher_id')->unsigned();
                $table->timestamps();

                // Foreign Key Constraints
                $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
                $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
};

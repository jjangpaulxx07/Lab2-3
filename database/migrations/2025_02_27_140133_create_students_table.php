<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id('student_id');
        $table->string('email', 45)->unique();
        $table->string('password', 45);
        $table->string('fname', 45);
        $table->string('lname', 45);
        $table->date('dob');
        $table->string('phone', 15)->nullable();
        $table->string('mobile', 15)->nullable();
        $table->boolean('status')->default(true);
        $table->timestamp('last_login')->nullable();
        $table->string('last_login_ip', 45)->nullable();
        $table->timestamps();

         // Foreign Key
    $table->unsignedBigInteger('parent_id');
    $table->foreign('parent_id')->references('parent_id')->on('parents')->onDelete('cascade');
    });
}
/**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

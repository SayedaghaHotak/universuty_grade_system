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
        Schema::create('grades', function (Blueprint $table) {
           $table->id();
        $table->unsignedBigInteger('student_id');
        $table->unsignedBigInteger('course_id');
        $table->unsignedBigInteger('professor_id');
        $table->integer('grade_value');
        $table->timestamps();

        $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        $table->foreign('professor_id')->references('id')->on('users')->onDelete('cascade');
        //
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

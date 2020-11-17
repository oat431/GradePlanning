<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations',function (Blueprint $table){
            $table->id('registration_id')->autoIncrement();
            $table->string('semester_name');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('student_id')->references('student_id')->on('users');
            $table->foreign('course_id')->references('course_id')->on('courses'); 
            $table->float('course_grade')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}

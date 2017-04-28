<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('score');
            $table->mediumText('incidences');
            $table->integer('subject_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('student_records');
    }
}

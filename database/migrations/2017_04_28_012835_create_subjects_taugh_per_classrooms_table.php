<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTaughPerClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects_taugh_per_classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('taught_on');
            $table->integer('subject_id')->unsigned();
            $table->integer('classroom_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
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
        Schema::dropIfExists('subjects_taugh_per_classrooms');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('courseName');
            $table->string('courseSortDes');
            $table->string('courseDes');
            $table->string('totalClass');
            $table->string('totalStudents');
            $table->string('price');
            $table->string('courseImg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

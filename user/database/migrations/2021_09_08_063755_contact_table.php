<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobileNo',);
            $table->string('email');
            $table->string('msg',1000);
            $table->smallInteger('status',false);
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

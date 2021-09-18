<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('fb_link');
            $table->string('git_link');
            $table->string('ln_link');
            $table->string('address');
            $table->string('mobileNo');
            $table->string('mailAdd');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TopBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topBanner_table', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('topBannerTitle',250);
            $table->string('topBannerSubTitle',150);
            $table->string('topBannerSortDesc',50);

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

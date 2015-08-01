<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	Schema::create('pages', function(Blueprint $table)
		{
                    $table->engine = 'MyISAM';
                    $table->increments('id')->unsigned();
                    $table->string('type', 100);
                    $table->string('url', 100);
                    $table->string('name', 100);
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
        Schema::drop('pages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
  Schema::create('reviews', function(Blueprint $table)
  {
    $table->bigIncrements('id');
    $table->integer('user_id');
    $table->string('comment')->nullable();
    $table->integer('rating');
    $table->rememberToken();
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BusinessCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Business_category', function(Blueprint $table)
  {
      $table->integer('category_id')->unsigned();
      $table->integer('business_id')->unsigned();
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
          Schema::dropIfExists('Business_category');
    }
}

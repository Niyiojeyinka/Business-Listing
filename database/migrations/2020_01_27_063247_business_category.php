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
       

  Schema::create('business_category', function(Blueprint $table)
  {
      $table->integer('category_id')->unsigned()->nullable()->foreign('category_id')->references('id')
            ->on('categories')->onDelete('cascade');
      $table->integer('business_id')->unsigned()->nullable()->references('id')
            ->on('todolists')->onDelete('cascade');

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

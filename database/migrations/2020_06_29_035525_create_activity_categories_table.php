<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_category', function (Blueprint $table) {
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_activity');

            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_activity')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_categories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_activity');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_activity')->references('id')->on('activities');
            $table->foreign('id_user')->references('id')->on('users');

            $table->integer('guest_amount');
            $table->date('booking_date');
            $table->string('gross_total');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

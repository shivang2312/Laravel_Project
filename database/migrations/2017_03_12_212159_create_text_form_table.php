<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('text_form', function (Blueprint 

$table) {
            $table->increments('id');
            $table->string('websitename');
            $table->string('websiteurl');
            $table->string('ownername');
            $table->string('designername');
            $table->string('category');
            $table->string('majorcolor');
            $table->string('country');
            $table->text('description');
            $table->string('paymentmethod');
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
        Schema::drop("text_form");
    }
}

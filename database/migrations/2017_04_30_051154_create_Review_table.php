<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Review', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('responsiveness_score');
            $table->text('responsiveness_review');

            $table->integer('layout_score');
            $table->text('lauout_review');

            $table->string('color_scheme');
            $table->integer('color_scheme_score');
            $table->text('color_scheme_review');

            $table->integer('pagespeed_score');
            $table->text('pagespeed_review');            

            $table->integer('usability_score');
            $table->text('usability_review');

            $table->integer('content_score');
            $table->text('content_review');

            $table->integer('creativity_score');
            $table->text('creativity_review');

            $table->integer('plan_id')->unsigned()->reference('id')->on('plans');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Review');
    }
}

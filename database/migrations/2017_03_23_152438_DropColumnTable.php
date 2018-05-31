<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('contactus1');

        Schema::table('users', function($table) {
             $table->dropColumn('created_at');
             $table->dropColumn('updated_at');
             $table->dropColumn('stripe_active');
             $table->dropColumn('stripe_id');
             $table->dropColumn('stripe_subscription');
             $table->dropColumn('stripe_plan');
             $table->dropColumn('last_four');
             $table->dropColumn('trial_ends_at');
             $table->dropColumn('subscription_ends_at');
             $table->dropColumn('google_id');
             $table->dropColumn('avatar');
          });

        Schema::drop('text_form');
        Schema::drop('video_form');

        Schema::table('free_form', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('majorcolor');
        });

        Schema::table('password_resets', function($table) {
            $table->dropColumn('created_at');
        });

        Schema::table('social_providers', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactus1');

        Schema::table('users', function($table) {
             $table->dropColumn('created_at');
             $table->dropColumn('updated_at');
             $table->dropColumn('stripe_active');
             $table->dropColumn('stripe_id');
             $table->dropColumn('stripe_subscription');
             $table->dropColumn('stripe_plan');
             $table->dropColumn('last_four');
             $table->dropColumn('trial_ends_at');
             $table->dropColumn('subscription_ends_at');
             $table->dropColumn('google_id');
             $table->dropColumn('avatar');
          });

        Schema::drop('text_form');
        Schema::drop('video_form');

        Schema::table('free_form', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('majorcolor');
        });

        Schema::table('password_resets', function($table) {
            $table->dropColumn('created_at');
        });

        Schema::table('social_providers', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}

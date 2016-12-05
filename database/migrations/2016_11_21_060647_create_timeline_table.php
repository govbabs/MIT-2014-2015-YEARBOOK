<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mit_timeline', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header');
            $table->text('description');
            $table->text('thumbnail')->nullable();
            $table->integer('post_by');
            $table->foreign('post_by')->references('user_id')->on('mit_users');
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
        Schema::drop('mit_timeline');
    }
}

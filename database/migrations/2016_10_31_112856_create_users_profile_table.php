<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mit_users_profile', function (Blueprint $table) {
            $table->increments('profile_id');
            $table->integer('user_id')->unsigned();
            $table->text('description'); //personal message about students
            $table->string('imgPath');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('mit_users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mit_users_profile');
    }
}

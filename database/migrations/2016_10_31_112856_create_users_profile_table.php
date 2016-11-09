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
    public function up(){
        Schema::create('mit_users_profile', function (Blueprint $table) {
            $table->increments('profile_id');
            $table->integer('user_id')->unsigned();
            $table->date('date_of_birth')->useCurrent()->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('occupation')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('imgPath')->nullable();
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

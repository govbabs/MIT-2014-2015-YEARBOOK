<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mit_profile_view', function(Blueprint $table){
            $table->integer('user_id')->unsigned()->index();
            $table->integer('profile_viewed')->unsigned()->index();
            $table->foreign('user_id')->references('user_id')->on('mit_users')->onDelete('cascade');
            $table->foreign('profile_viewed')->references('user_id')->on('mit_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //
    }
}

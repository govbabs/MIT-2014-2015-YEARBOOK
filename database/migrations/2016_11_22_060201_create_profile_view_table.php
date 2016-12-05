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
        Schema::create('mit_profile_view_counter', function(Blueprint $table){
            $table->increments('id');
            $table->string('class_name');
            $table->integer('object_id');
            $table->integer('user_id');
            $table->string('action');

            $table->timestamps();
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

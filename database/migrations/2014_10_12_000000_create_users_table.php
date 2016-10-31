<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mit_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('matricNo')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_no');
            $table->text('description'); //personal message about students
            $table->string('email')->unique();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('password');
            $table->string('token')->index();
            $table->boolean('activated')->default(false);
            $table->boolean('active')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('mit_users');
    }
}

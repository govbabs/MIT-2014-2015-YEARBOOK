<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditSql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        /*Schema::create('mit_users_profile', function (Blueprint $table) {
            $table->date('date_of_birth')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('occupation')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('instagram')->nullable();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        /*Schema::create('mit_users_profile', function (Blueprint $table) {
            $table->dropColumn('date_of_birth');
            $table->dropColumn('address');
            $table->dropColumn('description');
            $table->dropColumn('country');
            $table->dropColumn('occupation');
            $table->dropColumn('website');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('google');
            $table->dropColumn('instagram');
        });*/
    }
}

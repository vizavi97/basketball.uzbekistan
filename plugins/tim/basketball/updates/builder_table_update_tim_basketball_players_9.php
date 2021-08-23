<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers9 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('born_place', 191)->nullable()->change();
            $table->string('citizenship', 191)->nullable()->change();
            $table->string('position', 191)->nullable()->change();
            $table->string('place_of_birth', 191)->nullable()->change();
            $table->string('place_of_living', 191)->nullable()->change();
            $table->string('gender', 191)->nullable()->change();
            $table->string('training_time', 191)->nullable()->change();
            $table->string('playing_time', 191)->nullable()->change();
            $table->text('trauma')->nullable()->change();
            $table->integer('mother_height')->nullable()->change();
            $table->integer('father_height')->nullable()->change();
            $table->integer('coach_id')->nullable()->change();
            $table->string('phone_number', 20)->nullable()->change();
            $table->integer('age')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('born_place', 191)->nullable(false)->change();
            $table->string('citizenship', 191)->nullable(false)->change();
            $table->string('position', 191)->nullable(false)->change();
            $table->string('place_of_birth', 191)->nullable(false)->change();
            $table->string('place_of_living', 191)->nullable(false)->change();
            $table->string('gender', 191)->nullable(false)->change();
            $table->string('training_time', 191)->nullable(false)->change();
            $table->string('playing_time', 191)->nullable(false)->change();
            $table->text('trauma')->nullable(false)->change();
            $table->integer('mother_height')->nullable(false)->change();
            $table->integer('father_height')->nullable(false)->change();
            $table->integer('coach_id')->nullable(false)->change();
            $table->string('phone_number', 20)->nullable(false)->change();
            $table->integer('age')->nullable(false)->change();
        });
    }
}

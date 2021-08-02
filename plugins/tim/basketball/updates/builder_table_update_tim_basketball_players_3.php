<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers3 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('place_of_birth');
            $table->string('place_of_living');
            $table->string('gender');
            $table->string('training_time');
            $table->string('playing_time');
            $table->string('trauma');
            $table->integer('mother_height');
            $table->smallInteger('father_height');
            $table->renameColumn('number', 'game_number');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->dropColumn('place_of_birth');
            $table->dropColumn('place_of_living');
            $table->dropColumn('gender');
            $table->dropColumn('training_time');
            $table->dropColumn('playing_time');
            $table->dropColumn('trauma');
            $table->dropColumn('mother_height');
            $table->dropColumn('father_height');
            $table->renameColumn('game_number', 'number');
        });
    }
}

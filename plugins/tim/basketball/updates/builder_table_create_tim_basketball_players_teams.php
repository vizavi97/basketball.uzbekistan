<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballPlayersTeams extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_players_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('player_id');
            $table->integer('team_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_players_teams');
    }
}

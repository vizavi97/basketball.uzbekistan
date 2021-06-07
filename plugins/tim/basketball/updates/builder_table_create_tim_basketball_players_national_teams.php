<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballPlayersNationalTeams extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_players_national_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('player_id');
            $table->integer('national_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_players_national_teams');
    }
}

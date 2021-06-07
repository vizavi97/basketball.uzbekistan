<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayersNationalTeams extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players_national_teams', function($table)
        {
            $table->renameColumn('national_id', 'national_teams_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players_national_teams', function($table)
        {
            $table->renameColumn('national_teams_id', 'national_id');
        });
    }
}

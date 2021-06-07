<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatchTeamVersus extends Migration
{
    public function up()
    {
        Schema::rename('tim_basketball_match_team_home', 'tim_basketball_match_team_versus');
    }
    
    public function down()
    {
        Schema::rename('tim_basketball_match_team_versus', 'tim_basketball_match_team_home');
    }
}

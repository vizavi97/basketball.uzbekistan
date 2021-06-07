<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatchTeamVersus3 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_match_team_versus', function($table)
        {
            $table->renameColumn('team_home_id', 'team_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_match_team_versus', function($table)
        {
            $table->renameColumn('team_id', 'team_home_id');
        });
    }
}

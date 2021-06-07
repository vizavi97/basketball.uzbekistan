<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatchTeamHome2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_match_team_home', function($table)
        {
            $table->renameColumn('team_id', 'team_home_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_match_team_home', function($table)
        {
            $table->renameColumn('team_home_id', 'team_id');
        });
    }
}

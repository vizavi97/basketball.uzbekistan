<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballTeams3 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->smallInteger('tournament_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->dropColumn('tournament_id');
        });
    }
}

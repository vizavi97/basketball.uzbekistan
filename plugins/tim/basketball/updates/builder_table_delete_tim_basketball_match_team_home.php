<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballMatchTeamHome extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_match_team_home');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_match_team_home', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('match_id');
            $table->integer('team_home_id');
        });
    }
}

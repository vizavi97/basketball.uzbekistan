<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballMatchTeamVersus extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_match_team_versus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('match_id');
            $table->integer('team_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_match_team_versus');
    }
}

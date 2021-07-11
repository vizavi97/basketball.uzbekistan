<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballCoachesTeams extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_coaches_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('coach_id');
            $table->integer('team_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_coaches_teams');
    }
}

<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballTeams4 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->integer('tournament_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->smallInteger('tournament_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

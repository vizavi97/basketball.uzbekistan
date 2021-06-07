<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatches7 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->integer('tournament_id')->default(0);
            $table->integer('team_home_id')->default(0)->change();
            $table->integer('team_versus_id')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->dropColumn('tournament_id');
            $table->integer('team_home_id')->default(null)->change();
            $table->integer('team_versus_id')->default(null)->change();
        });
    }
}

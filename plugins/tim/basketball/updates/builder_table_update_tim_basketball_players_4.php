<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers4 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->integer('coach_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->dropColumn('coach_id');
        });
    }
}

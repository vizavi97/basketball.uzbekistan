<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('position');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->dropColumn('position');
        });
    }
}

<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers7 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->integer('age');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->dropColumn('age');
        });
    }
}

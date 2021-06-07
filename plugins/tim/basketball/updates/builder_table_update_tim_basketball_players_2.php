<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->integer('national_number')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->dropColumn('national_number');
        });
    }
}

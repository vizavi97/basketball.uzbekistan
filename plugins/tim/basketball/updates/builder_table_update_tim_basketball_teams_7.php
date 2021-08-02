<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballTeams7 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->string('age');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->dropColumn('age');
        });
    }
}

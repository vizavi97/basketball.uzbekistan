<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballTeams2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->string('gender');
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->dropColumn('gender');
            $table->dropColumn('type');
        });
    }
}

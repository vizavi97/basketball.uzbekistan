<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatches4 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->integer('team_versus_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->dropColumn('team_versus_id');
        });
    }
}

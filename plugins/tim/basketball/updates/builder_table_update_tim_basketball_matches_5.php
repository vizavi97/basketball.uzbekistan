<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatches5 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->integer('tournament_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->dropColumn('tournament_id');
        });
    }
}

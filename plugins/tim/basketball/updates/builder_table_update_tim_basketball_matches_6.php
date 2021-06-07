<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballMatches6 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->integer('match_number')->nullable()->change();
            $table->dropColumn('tournament_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_matches', function($table)
        {
            $table->integer('match_number')->nullable(false)->change();
            $table->integer('tournament_id');
        });
    }
}

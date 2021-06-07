<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballNationalTeams extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_national_teams', function($table)
        {
            $table->smallInteger('short_title');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_national_teams', function($table)
        {
            $table->dropColumn('short_title');
        });
    }
}

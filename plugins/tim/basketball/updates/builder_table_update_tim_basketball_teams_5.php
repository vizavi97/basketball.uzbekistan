<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballTeams5 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->string('section_address');
            $table->string('section_training_time');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_teams', function($table)
        {
            $table->dropColumn('section_address');
            $table->dropColumn('section_training_time');
        });
    }
}

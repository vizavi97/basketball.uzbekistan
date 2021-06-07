<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballNationalTeams2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_national_teams', function($table)
        {
            $table->string('short_title', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_national_teams', function($table)
        {
            $table->smallInteger('short_title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

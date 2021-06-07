<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCalendar4 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->string('type', 163);
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->dropColumn('type');
        });
    }
}

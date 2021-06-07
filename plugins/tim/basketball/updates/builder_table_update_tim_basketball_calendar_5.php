<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCalendar5 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->text('description');
        });
    }
}

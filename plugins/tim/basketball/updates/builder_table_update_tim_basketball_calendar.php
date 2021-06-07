<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCalendar extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->dropColumn('id');
        });
    }
}

<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCalendar3 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->text('event')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_calendar', function($table)
        {
            $table->smallInteger('event')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
